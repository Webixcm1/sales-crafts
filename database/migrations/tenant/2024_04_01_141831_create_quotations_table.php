<?php

use App\Models\Enum\QuoteStatus;
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
        Schema::create('quotations', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('client_id')->constrained('clients')->cascadeOnDelete();
            $table->foreignUuid('product_id')->constrained('products');
            $table->string('issue_date')->nullable();
            $table->string('expiry_date')->nullable();
            $table->string('ref')->unique();
            $table->bigInteger('quantity')->nullable();
            $table->float('PU')->nullable();
            $table->float('total_ht')->nullable();
            $table->float('total_ttc')->nullable();
            $table->string('remise')->nullable();
            $table->float('total')->nullable();
            $table->enum('status', QuoteStatus::allCaseInStr())->default('en attente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotations');
    }
};
