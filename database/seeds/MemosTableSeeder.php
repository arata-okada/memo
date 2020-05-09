<?php

use Illuminate\Database\Seeder;

class MemosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('memos')->insert([
            'id' => '2',
            'content' => 'テスト2',
            'created_at' => date('Y-m-d H:i:d'),
            'updated_at' => date('Y-m-d H:i:d'),
        ]);
        DB::table('memos')->insert([
            'id' => '3',
            'content' => 'テスト3',
            'created_at' => date('Y-m-d H:i:d'),
            'updated_at' => date('Y-m-d H:i:d'),
        ]);
    }
}
