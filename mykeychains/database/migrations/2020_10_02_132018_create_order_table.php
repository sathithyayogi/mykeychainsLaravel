<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->string('Name')->nullable();
            $table->string('email')->nullable();
            $table->string('number')->nullable();
            $table->integer('qty')->nullable();
            $table->integer('Price')->nullable();
            $table->string('FileName')->nullable();
            $table->string('couponCode')->nullable();
            $table->integer('TotPrice')->nullable();
            $table->string('Company')->nullable();
            $table->string('Address')->nullable();
            $table->string('AddNote')->nullable();
            $table->date('OrderDate')->nullable();
            $table->date('PaidDate')->nullable();
            $table->string('invoiceNo')->nullable();
            $table->string('UNumber')->nullable();
            $table->string('payrefNo')->nullable();
            $table->string('paymentStatus')->nullable();
            $table->string('paymentStatusDet')->nullable();
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
        Schema::dropIfExists('order');
    }
}
