<?php

use App\Models\Enum\ProductType;
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
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('product_family_id')->constrained('product_families')->cascadeOnDelete();
            $table->foreignUuid('supplier_id')->constrained('suppliers');
            $table->foreignUuid('tva_id')->constrained('t_v_a_s');
            $table->string('name')->nullable();
            $table->enum('type', ProductType::allCaseInStr())->default('produit');
            $table->string('internalRef')->nullable();
            $table->string('ref')->nullable();//frabricant ref
            $table->string('barcode')->nullable();
            $table->string('brand')->nullable();//marque
            $table->string('description')->nullable();
            $table->string('unit')->nullable();
            $table->bigInteger('quantity')->nullable();
            $table->integer('stock_alert')->nullable();
            $table->float('ht_price')->nullable();
            $table->float('ttc_price')->nullable();
            $table->float('total_price')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
