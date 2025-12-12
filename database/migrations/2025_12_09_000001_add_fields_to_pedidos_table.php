<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('pedidos', function (Blueprint $table) {
            // Add missing columns if they don't exist
            if (!Schema::hasColumn('pedidos', 'subtotal')) {
                $table->decimal('subtotal', 10, 2)->nullable()->after('total');
            }
            if (!Schema::hasColumn('pedidos', 'costo_envio')) {
                $table->decimal('costo_envio', 10, 2)->nullable()->after('subtotal');
            }
            if (!Schema::hasColumn('pedidos', 'descuento')) {
                $table->decimal('descuento', 10, 2)->nullable()->after('costo_envio');
            }
            if (!Schema::hasColumn('pedidos', 'metodo_envio')) {
                $table->string('metodo_envio', 100)->nullable()->after('descuento');
            }
            if (!Schema::hasColumn('pedidos', 'metodo_pago')) {
                $table->string('metodo_pago', 100)->nullable()->after('metodo_envio');
            }
            if (!Schema::hasColumn('pedidos', 'direccion_envio')) {
                $table->text('direccion_envio')->nullable()->after('metodo_pago');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pedidos', function (Blueprint $table) {
            if (Schema::hasColumn('pedidos', 'subtotal')) {
                $table->dropColumn('subtotal');
            }
            if (Schema::hasColumn('pedidos', 'costo_envio')) {
                $table->dropColumn('costo_envio');
            }
            if (Schema::hasColumn('pedidos', 'descuento')) {
                $table->dropColumn('descuento');
            }
            if (Schema::hasColumn('pedidos', 'metodo_envio')) {
                $table->dropColumn('metodo_envio');
            }
            if (Schema::hasColumn('pedidos', 'metodo_pago')) {
                $table->dropColumn('metodo_pago');
            }
            if (Schema::hasColumn('pedidos', 'direccion_envio')) {
                $table->dropColumn('direccion_envio');
            }
        });
    }
};
