<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('image')->insert([
                [
                'url' => '/image/bear.jpg',
                'filename' => 'public/image/bear.jpg'
                ],
                [
                    'url' => '/image/black_hole.jpg',
                    'filename' => 'public/image/black_hole.jpg'
                ],
                [
                    'url' => '/image/logo.png',
                    'filename' =>'public/image/logo.png'
                ]
            ]);
    }
}
