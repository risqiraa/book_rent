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
        //membuat tabel rent_logs
        Schema::create('rent_logs', function (Blueprint $table) {
            //membuat kolom
            $table->id();
            //membuat kolom user_id
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            //membuat foreign key user_id yang terhubung dengan kolom id yang berada pada tabel users

            //membuat kolom book_id
            $table->unsignedBigInteger('book_id');
            $table->foreign('book_id')->references('id')->on('books');
            //membuat foreign key book_id yang terhubung dengan kolom id yang berada pada tabel books

            $table->date('rent_date'); //membuat kolom pengambilan buku
            $table->date('return_date'); //kolom kapan buku harus di kembalikan
            $table->date('actual_rent_date')->nullable(); //kolom kapan buku di kembalikan


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
        //mengmbalikan migrasi
        Schema::dropIfExists('rent_logs');
    }
};
