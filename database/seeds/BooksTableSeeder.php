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
            'title' => 'Vue.js入門',
            'isbn' => '1234567891234',
            'author' => 'pyotarou',
            'publisher' => 'pyota.inc',
            'detail' => 'Vue.js初心者向けの本です。',
            'num' => 1,
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => 'Larabel入門',
            'isbn' => '1234567890000',
            'author' => 'pyota',
            'publisher' => 'pyota.inc',
            'detail' => 'Larabel初心者向けの本です。',
            'num' => 1,
        ];
        DB::table('books')->insert($param);
    }
}
