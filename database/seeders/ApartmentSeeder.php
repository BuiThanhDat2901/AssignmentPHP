<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('apartments')->truncate();
        DB::table('apartments')->insert([
            [
                'id' => 1,
                'name' => 'nha 1',
                'address' => 'HN',
                'price' => 20000,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://www.luatvietphong.vn/Uploads/chung-cu(1).jpg',
                'detail' => 'chi tiet',
                'status' => 1,
            ],
            [
                'id' => 2,
                'name' => 'nha 1',
                'address' => 'HN',
                'price' => 20000,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://www.luatvietphong.vn/Uploads/chung-cu(1).jpg',
                'detail' => 'chi tiet',
                'status' => 2,
            ],
            [
                'id' => 3,
                'name' => 'nha 1',
                'address' => 'HN',
                'price' => 20000,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://www.luatvietphong.vn/Uploads/chung-cu(1).jpg',
                'detail' => 'chi tiet',
                'status' => 3,
            ],
            [
                'id' => 4,
                'name' => 'nha 1',
                'address' => 'HN',
                'price' => 20000,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://www.luatvietphong.vn/Uploads/chung-cu(1).jpg',
                'detail' => 'chi tiet',
                'status' => 1,
            ],
            [
                'id' => 5,
                'name' => 'nha 1',
                'address' => 'HN',
                'price' => 20000,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://www.luatvietphong.vn/Uploads/chung-cu(1).jpg',
                'detail' => 'chi tiet',
                'status' => 1,
            ],
            [
                'id' => 6,
                'name' => 'nha 1',
                'address' => 'HN',
                'price' => 20000,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://www.luatvietphong.vn/Uploads/chung-cu(1).jpg',
                'detail' => 'chi tiet',
                'status' => 3,
            ],
            [
                'id' => 7,
                'name' => 'nha 1',
                'address' => 'HN',
                'price' => 20000,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://www.luatvietphong.vn/Uploads/chung-cu(1).jpg',
                'detail' => 'chi tiet',
                'status' => 1,
            ],
            [
                'id' => 8,
                'name' => 'nha 1',
                'address' => 'HN',
                'price' => 20000,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://www.luatvietphong.vn/Uploads/chung-cu(1).jpg',
                'detail' => 'chi tiet',
                'status' => 1,
            ],
            [
                'id' => 9,
                'name' => 'nha 1',
                'address' => 'HN',
                'price' => 20000,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://www.luatvietphong.vn/Uploads/chung-cu(1).jpg',
                'detail' => 'chi tiet',
                'status' => 1,
            ],
            [
                'id' => 10,
                'name' => 'nha 1',
                'address' => 'HN',
                'price' => 20000,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://www.luatvietphong.vn/Uploads/chung-cu(1).jpg',
                'detail' => 'chi tiet',
                'status' => 1,
            ],
            [
                'id' => 11,
                'name' => 'nha 1',
                'address' => 'HN',
                'price' => 20000,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://www.luatvietphong.vn/Uploads/chung-cu(1).jpg',
                'detail' => 'chi tiet',
                'status' => 3,
            ],
            [
                'id' => 12,
                'name' => 'nha 1',
                'address' => 'HN',
                'price' => 20000,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://www.luatvietphong.vn/Uploads/chung-cu(1).jpg',
                'detail' => 'chi tiet',
                'status' => 2,
            ],
            [
                'id' => 13,
                'name' => 'nha 1',
                'address' => 'HN',
                'price' => 20000,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://www.luatvietphong.vn/Uploads/chung-cu(1).jpg',
                'detail' => 'chi tiet',
                'status' => 1,
            ],
            [
                'id' => 14,
                'name' => 'nha 1',
                'address' => 'HN',
                'price' => 20000,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://www.luatvietphong.vn/Uploads/chung-cu(1).jpg',
                'detail' => 'chi tiet',
                'status' => 2,
            ],
            [
                'id' => 15,
                'name' => 'nha 1',
                'address' => 'HN',
                'price' => 20000,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://www.luatvietphong.vn/Uploads/chung-cu(1).jpg',
                'detail' => 'chi tiet',
                'status' => 1,
            ],
            [
                'id' => 16,
                'name' => 'nha 1',
                'address' => 'HN',
                'price' => 20000,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://www.luatvietphong.vn/Uploads/chung-cu(1).jpg',
                'detail' => 'chi tiet',
                'status' => 1,
            ],
            [
                'id' => 17,
                'name' => 'nha 1',
                'address' => 'HN',
                'price' => 20000,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://www.luatvietphong.vn/Uploads/chung-cu(1).jpg',
                'detail' => 'chi tiet',
                'status' => 1,
            ],
            [
                'id' => 18,
                'name' => 'nha 1',
                'address' => 'HN',
                'price' => 20000,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://www.luatvietphong.vn/Uploads/chung-cu(1).jpg',
                'detail' => 'chi tiet',
                'status' => 1,
            ],
            [
                'id' => 19,
                'name' => 'nha 1',
                'address' => 'HN',
                'price' => 20000,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://www.luatvietphong.vn/Uploads/chung-cu(1).jpg',
                'detail' => 'chi tiet',
                'status' => 1,
            ],[
                'id' => 20,
                'name' => 'nha 1',
                'address' => 'HN',
                'price' => 20000,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://www.luatvietphong.vn/Uploads/chung-cu(1).jpg',
                'detail' => 'chi tiet',
                'status' => 1,
            ]

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

    }
}
