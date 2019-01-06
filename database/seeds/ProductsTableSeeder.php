<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'title' => 'IPhone',
                'content' => "Smart Phone xxxx",
                'category' => "Technology",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'Samsung',
                'content' => "Smart Phone xxxx",
                'category' => "Technology",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'Xiaomi',
                'content' => "Smart Phone จีน",
                'category' => "Technology",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'Oppo',
                'content' => "Smart Phone จีน",
                'category' => "Technology",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'รองเท้า',
                'content' => "size 40",
                'category' => "Fashion",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'เสื้อ',
                'content' => "size L",
                'category' => "Fashion",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'กางเกง',
                'content' => "size 30",
                'category' => "Fashion",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'ปลอกแขนกัน UV',
                'content' => "กันแดดและรังสี uv",
                'category' => "Health",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'อุปกรณ์รัดกล้ามเนื้อ',
                'content' => "กระชับสัดส่วน",
                'category' => "Health",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'หน้ากากอนามัย',
                'content' => "ป้องกันฝุ่นละออง",
                'category' => "Health",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'แผ่นซับสิว',
                'content' => "กำจัดสิว",
                'category' => "Health",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }

}
