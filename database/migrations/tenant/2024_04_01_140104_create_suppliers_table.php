<?php

use App\Models\Enum\SuppliersType;
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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name')->unique();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->string('matricule_fiscal')->nullable();
            $table->string('website')->nullable();
            $table->string('address')->nullable();
            $table->string('code_client')->unique()->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->enum('type', SuppliersType::allCaseInStr())->default('entreprise');
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
