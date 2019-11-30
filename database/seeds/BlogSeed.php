<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BlogSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('blog')->insert([
            [
                'name'=>'First test',
                'poem'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum officiis omnis delectus nihil, voluptates eos aspernatur doloribus nobis dicta! Quasi odio magnam tempora dolor ipsum, natus maxime perspiciatis unde fuga!'
            ],
            [
                'name'=>'Banana Man',
                'poem'=>'Little big'
            ],
            [
                'name'=>'Delete me',
                'poem'=>'Destroy me'
            ]
        ]);

    }
}
