<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            [
                'owner_id' => 1,
                'name' => 'MUSINSA (ムシンサ)',
                'information' => 'MUSINSAは、大韓民国のオンラインファッションコマース企業である。社名は「ものすごく靴の写真が多いところ」という意味の「ムジハゲシンバルサジ二マヌンゴッ」の頭文字を取ったものである。',
                'filename' => 'sample1.jpg',
                'is_selling' => true
            ],
            [
                'owner_id' => 2,
                'name' => 'DHOLIC (ディーホリック)',
                'information' => 'ここにお店の情報が入ります。ここにお店の情報が入ります。ここにお店の情報が入ります。',
                'filename' => 'sample2.jpg',
                'is_selling' => true
            ],
        ]);
    }
}
