<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $products = [];
        
        for ($i = 1; $i <= 10; $i++) {
            $products[] = [
                //'id_type' => rand(1, 5), // Adjust based on your `type_products` table
                'name' => "laptop" . $i,
                'description' => "Màn hình với độ phân giải Full HD cho hình ảnh hiển thị sắc nét, sinh động, rõ ràng, chân thực, không chỉ giúp bạn trong việc học mà còn cho bạn những trải nghiệm tuyệt vời khi giải trí.
Giá thành khá rẻ từ 9 – 10 triệu (cập nhật tháng 11/2022) là có thể sở hữu chiếc laptop, nên được nhiều người tin tưởng lựa chọn.",
                'unit_price' => rand(1000, 10000),
                'promotion_price' => rand(500, 9000),
                'image' => 'images/laptop.jpg',
                'new' => rand(0, 1),
                'quantity' => rand(10, 100),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('products')->insert($products);
    }
}
