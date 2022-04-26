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
        Schema::create('customers', function (Blueprint $table) {
//            $table->id();
//            $table->timestamps();
            $table->increments('id');
            $table->string('name')->comment('顧客名');
            $table->integer('staff_id')->unsigned()->nullable()->comment('担当スタッフid');
            $table->enum('status', ['active', 'stop']);
            $table->timestamps();

            $table->foreign('staff_id')->references('id')->on('staffs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
