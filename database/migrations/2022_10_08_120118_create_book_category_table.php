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
        //membuat tabel book_category untuk menampung relasi
        Schema::create('book_category', function (Blueprint $table) {
            //membuat kolom
            $table->id();
            //membuat kolom book_id yang references ke kolom id di tabel books
            $table->unsignedBigInteger('book_id');
            $table->foreign('book_id')->references('id')->on('books');

            //membuat kolom category_id yang references ke kolom id di tabel categories
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');

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
        //mengembalikan migration
        Schema::dropIfExists('book_category');
    }
};
