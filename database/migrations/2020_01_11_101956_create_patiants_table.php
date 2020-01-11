<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patiants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('age');
            $table->string('phone');
            $table->string('email')->unique();
            $table->char('gender');
            $table->string('doc_name');
            $table->integer('test');
            $table->boolean('account_type');
            $table->boolean('receipt_type');
            $table->datetime("date_of_entry");
            $table->datetime("date_of_receiving");

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
        Schema::dropIfExists('patiants');
    }
}
