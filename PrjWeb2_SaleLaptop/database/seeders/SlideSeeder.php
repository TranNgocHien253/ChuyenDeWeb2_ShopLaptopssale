<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('slides')->insert([
            [
                'link' => 'https://example.com/slide1',
                'image' => 'images/slide1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'link' => 'https://example.com/slide2',
                'image' => 'images/slide2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'link' => 'https://example.com/slide3',
                'image' => 'images/slide3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'link' => 'https://example.com/slide4',
                'image' => 'images/slide4.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Thêm nhiều bản ghi nếu cần
        ]);
    }
}
