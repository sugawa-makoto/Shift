<?php

use Illuminate\Database\Seeder;

class youbis_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '月',
        ];
        DB::table('youbis')->insert($param);

        $param = [
            'name' => '火',
        ];
        DB::table('youbis')->insert($param);

        $param = [
            'name' => '水',
        ];
        DB::table('youbis')->insert($param);

        $param = [
            'name' => '木',
        ];
        DB::table('youbis')->insert($param);

        $param = [
            'name' => '金',
        ];
        DB::table('youbis')->insert($param);

        $param = [
            'name' => '土',
        ];
        DB::table('youbis')->insert($param);

        $param = [
            'name' => '日',
        ];
        DB::table('youbis')->insert($param);
    }
}
