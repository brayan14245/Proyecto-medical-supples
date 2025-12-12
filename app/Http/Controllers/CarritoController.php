<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class CarritoController extends Controller
{
    public function agregar(Request $request){
        $producto = Producto::findOrFail($request->producto_id);
        $cantidad = $request->cantidad ?? 1;

        $carrito = session()->get('carrito', []);
        if (isset($carrito[$producto->id])) {
            // Ya existe en el carrito, solo aumenta la cantidad
            $carrito[$producto->id]['cantidad'] += $cantidad;
        } else {
            // No existe, lo agregamos
            $carrito[$producto->id] = [
                'codigo' => $producto->codigo,
                'nombre' => $producto->nombre,
                'precio' => $producto->precio,
                'imagen' => $producto->imagen,
                'cantidad' => $cantidad,
            ];
        }
        session()->put('carrito', $carrito);
        
        // Si es una petición AJAX, retornar JSON
        if ($request->ajax() || $request->wantsJson()) {
            $totalItems = array_sum(array_column($carrito, 'cantidad'));
            return response()->json([
                'success' => true,
                'message' => 'Producto agregado al carrito',
                'totalItems' => $totalItems
            ]);
        }
        
        return redirect()->back()->with('mensaje', 'Producto agregado al carrito');
    }

    public function mostrar(){
        $carrito = session('carrito', []);
        return view('web.carrito', compact('carrito'));
    }

    public function sumar(Request $request){
        $productoId = $request->producto_id;

        $carrito = session()->get('carrito', []);

        if (isset($carrito[$productoId])) {
            $carrito[$productoId]['cantidad'] += 1;
            session()->put('carrito', $carrito);
        }

        return redirect()->back()->with('mensaje', 'Cantidad actualizada en el carrito');
    }

    public function restar(Request $request){
        $productoId = $request->producto_id;

        $carrito = session()->get('carrito', []);

        if (isset($carrito[$productoId])) {
            if ($carrito[$productoId]['cantidad'] > 1) {
                // Resta 1 si la cantidad es mayor a 1
                $carrito[$productoId]['cantidad'] -= 1;
            } 
            else{
                // Si es 1, lo quitamos del carrito
                unset($carrito[$productoId]);
            }
            session()->put('carrito', $carrito);
        }

        return redirect()->back()->with('mensaje', 'Cantidad actualizada en el carrito');
    }
    
    public function eliminar($id){
        $carrito = session()->get('carrito');
        if (isset($carrito[$id])) {
            unset($carrito[$id]);
            session()->put('carrito', $carrito);
        }
        return redirect()->back()->with('success', 'Producto eliminado');
    }
    
    public function vaciar(){
        session()->forget('carrito');
        return redirect()->back()->with('success', 'Carrito vaciado');
    }

    /**
     * Obtener el contador de items en el carrito (para AJAX)
     */
    public function getCount(){
        $carrito = session('carrito', []);
        $totalItems = array_sum(array_column($carrito, 'cantidad'));
        
        return response()->json([
            'count' => $totalItems
        ]);
    }
}
