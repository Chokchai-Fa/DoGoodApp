<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_student', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student');
            $table->string('Age');
            $table->string('Tel');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE _student AUTO_INCREMENT = 1;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_student');
    }
}
