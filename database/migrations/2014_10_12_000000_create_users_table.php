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
        //membuat tabel users
        // php artisan make:migration create_users_table
        //
        Schema::create('users', function (Blueprint $table) {
            //membuat kolom id dengan colstring
            $table->id();
            //membuat kolom string dan menambahkan atribut unique
            $table->string('username')->unique(); // apa itu unique?
            $table->string('password');
            $table->string('phone')->nullable(); // apa itu nullable?
            //membuat kolom adress tipe text > coltext
            $table->text('address');
            $table->string('status')->default('inactive');

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
        Schema::dropIfExists('users');
    }
};
