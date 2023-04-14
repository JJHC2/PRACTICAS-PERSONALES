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
        Schema::create('type_users', function (Blueprint $table) {
            $table->BigIncrements("id");
            $table->string("type",40);
            $table->unsignedBigInteger("users_id");
            $table->foreign("users_id")->references("id")->on("usuarios")->onDelete('cascade');
            $table->timestamps();
            $table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_users');
    }
};
