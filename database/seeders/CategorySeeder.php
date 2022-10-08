<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() // membuat seeder untuk Role
    {
        //menghapus data pada tabel
        Schema::disableForeignKeyConstraints();
        Category::truncate();
        Schema::enableForeignKeyConstraints();

        //data yang akan di masukkan
        $data = [
            'comic', 'novel', 'fantasy', 'fiction', 'mystery', 'horror'
        ];

        foreach ($data as $value) { //data alias value
            Category::insert(
                [
                    'name' => $value //nama
                ]
            );
        }
    }
}
