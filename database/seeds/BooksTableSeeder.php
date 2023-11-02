<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'title' => 'Laravel入門',
            'author' => '掌田　津耶乃',
            'publisher' => '秀和システム',
            'price' => '3300',
            'star' => '★★★★★',
            'review' => 'Laravel入門'
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => 'Laravel入門',
            'author' => '掌田　津耶乃',
            'publisher' => '秀和システム',
            'price' => '3300',
            'star' => '★★★★★',
            'review' => 'Laravel入門'
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => 'Laravel入門',
            'author' => '掌田　津耶乃',
            'publisher' => '秀和システム',
            'price' => '3300',
            'star' => '★★★★★',
            'review' => 'Laravel入門'
        ];
        DB::table('books')->insert($param);
    }
}
