<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dishes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('c_id')->constrained('cuisines');
            $table->foreign('c_id')->references('c_id')->on('cuisines');
            $table->string('d_img');
            $table->string('d_name');
            $table->string('d_discription');
            $table->integer('qty');
            $table->decimal('price', 8, 2);    
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dishes');
    }
}
