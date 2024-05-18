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
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // Assuming you need a primary key
            $table->string('name', 30);
            $table->integer('age'); // Removed the length parameter
            $table->string('email', 40)->nullable()->unique();
            $table->string('address');
            $table->string('city');
            $table->string('phone');
            $table->string('password');
            $table->timestamps(); // Moved inside the closure
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
