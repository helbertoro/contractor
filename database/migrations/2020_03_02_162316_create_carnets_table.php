<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarnetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carnets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->string('typeIdentification', 2);
            $table->string('identification', 15);
            $table->string('rh', 3);
            $table->date('birthday');
            $table->string('address', 100);
            $table->string('phone', 15);
            $table->string('email', 50);
            $table->string('profession', 50);
            $table->string('workGroup', 50);
            $table->string('picture', 100);
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
        Schema::dropIfExists('carnets');
    }
}
