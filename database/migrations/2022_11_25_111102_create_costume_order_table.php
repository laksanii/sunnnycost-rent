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
        Schema::create('costume_order', function (Blueprint $table) {
            $table->id();
            $table->foreignId('costume_id')->constrained('costumes');
            $table->foreignId('order_id')->constrained('orders');
            $table->decimal('price', $precision = 10, $scale = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('costume_order');
    }
};