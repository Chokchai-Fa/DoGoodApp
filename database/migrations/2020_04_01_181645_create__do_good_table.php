<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoGoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_do_good', function (Blueprint $table) {
            $table->increments('id');
            $table->string('DoGood');
        });
        DB::statement("ALTER TABLE _do_good AUTO_INCREMENT = 1;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_do_good');
    }
}
