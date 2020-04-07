<?php

use Illuminate\Database\Seeder;

class TblCommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_comments')->insert([
            [
                'id' => null,
                'created_at' => '2020-04-01 00:00:00',
                'updated_at' => '2020-04-01 00:00:00',
                'comment_title' => 'c1',
                'comment_text' => 't1',
            ],
            [
                'id' => null,
                'created_at' => '2020-04-01 00:00:00',
                'updated_at' => '2020-04-01 00:00:00',
                'comment_title' => 'c2',
                'comment_text' => 't2',
            ],
            [
                'id' => null,
                'created_at' => '2020-04-01 00:00:00',
                'updated_at' => '2020-04-01 00:00:00',
                'comment_title' => 'c3',
                'comment_text' => 't3',
            ],
        ]);
    }
}
