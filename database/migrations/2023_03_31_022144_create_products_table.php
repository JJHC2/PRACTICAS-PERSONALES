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
        Schema::create('products', function (Blueprint $table) {
            $table->BigIncrements("id")->primarykey();
            $table->string("color", 10); 
            $table->double("price");
            $table->string("name_p",120);
            $table->string("description",120);
            $table->string("status",70);
            $table->double("size");
            $table->integer("existence");
            $table->timestamps();
            $table->SoftDeletes();
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
