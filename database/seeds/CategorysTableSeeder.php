<?php

use Illuminate\Database\Seeder;

class CategorysTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        DB::table('categorys')->truncate();
        DB::table('categorys')->insert([
            [
                'name' => 'Technology',
                'content' => "xxxxxxx",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Fashion',
                'content' => "xxxxxxx",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Health',
                'content' => "xxxxxxx",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }

}
