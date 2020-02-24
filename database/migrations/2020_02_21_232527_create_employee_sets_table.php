<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_sets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('type_id');
            $table->integer('select_youbi_id');
            $table->integer('max_one_month');
            $table->integer('company_set_id');
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
        Schema::dropIfExists('employee_sets');
    }
}
