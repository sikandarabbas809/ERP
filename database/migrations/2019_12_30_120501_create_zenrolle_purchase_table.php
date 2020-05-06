<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZenrollePurchaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zenrolle_purchase', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('company_id');
            $table->Integer('invoice_no');
            $table->date('invoicedate');
            $table->date('invoicedue_date');
            $table->decimal('tax');
            $table->decimal('discount');
            $table->decimal('subtotal');
            $table->decimal('shipping');
            $table->decimal('totaltax');
            $table->string('notes');
            $table->string('status');
            $table->unsignedBigInteger('emp_id');
            $table->decimal('payment');
            $table->decimal('taxstatus');
            $table->string('discount_status');
            $table->string('format_discount');
            $table->string('refer');
            $table->integer('location');
            $table->boolean('update_stock');
            $table->foreign('company_id')->references('company_id')->on('companies');
            $table->foreign('emp_id')->references('id')->on('zenrolle_employees');
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
        Schema::dropIfExists('zenrolle_purchase');
    }
}
