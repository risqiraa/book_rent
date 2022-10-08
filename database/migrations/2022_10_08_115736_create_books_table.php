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
        //membuat table books dengan php artisan make:migration create_books_table
        Schema::create('books', function (Blueprint $table) {
            //membuat kolom
            $table->id();
            $table->string('book_code');
            $table->string('title');
            $table->string('status')->default('in stock');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() // mengembalikan migration
    {
        Schema::dropIfExists('books');
    }
};
