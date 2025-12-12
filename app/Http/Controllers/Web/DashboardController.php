<?php

namespace App\Http\Controllers\Web;

use App\Models\Pedido;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $user = auth()->user();
        
        // Base query
        $query = $user->pedidos();

        // Filter by status if provided
        if ($request->has('estado') && $request->estado) {
            $query->where('estado', $request->estado);
        }

        // Get paginated results
        $pedidos = $query->orderBy('created_at', 'desc')->paginate(10);

        // Calculate statistics
        $allPedidos = $user->pedidos();
        
        $totalPedidos = $allPedidos->count();
        $pedidosPendientes = $allPedidos->where('estado', 'pendiente')->count();
        $pedidosEnProceso = $allPedidos->where('estado', 'procesando')->count();
        $pedidosCompletados = $allPedidos->where('estado', 'completado')->count();
        $totalGastado = $allPedidos->sum('total');
        $ultimoPedido = $allPedidos->orderBy('created_at', 'desc')->first();

        return view('web.perfil.dashboard', compact(
            'pedidos',
            'totalPedidos',
            'pedidosPendientes',
            'pedidosEnProceso',
            'pedidosCompletados',
            'totalGastado',
            'ultimoPedido'
        ));
    }

    public function detalle($id)
    {
        $pedido = Pedido::findOrFail($id);

        // Check if user owns this order
        if ($pedido->user_id !== auth()->id()) {
            abort(403, 'No autorizado');
        }

        // Load detalles if not already loaded
        $pedido->load('detalles', 'detalles.producto');

        return view('web.perfil.pedido-detalle', compact('pedido'));
    }

    public function cancelar($id)
    {
        $pedido = Pedido::findOrFail($id);

        // Check if user owns this order
        if ($pedido->user_id !== auth()->id()) {
            abort(403, 'No autorizado');
        }

        // Only pending orders can be cancelled
        if ($pedido->estado !== 'pendiente') {
            return back()->with('error', 'Solo se pueden cancelar pedidos pendientes');
        }

        $pedido->update(['estado' => 'cancelado']);

        return redirect()->route('perfil.dashboard')->with('success', 'Pedido cancelado exitosamente');
    }
}
