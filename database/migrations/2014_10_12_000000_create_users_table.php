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
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('foto_profile')->default('default.jpg');
            $table->string('foto_selfie')->nullable();
            $table->string('foto_ktp')->nullable();
            $table->string('provinsi');
            $table->string('kota');
            $table->string('alamat');
            $table->string('kode_pos', 10);
            $table->string('no_telepon', 20);
            $table->string('role')->default('member');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};