<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('position_id')->nullable()->constrained('positions');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('cpf');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->enum('status', ['Ativo', 'Inativo'])->default('Ativo');
            $table->timestamps();
        });

//        Schema::create('user_position', function (Blueprint $table) {
//            $table->foreignId('position_id')->constrained('positions');
//            $table->foreignId('user_id')->constrained('users');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::dropIfExists('user_position');
        Schema::dropIfExists('users');
    }
};
