<?php

use Illuminate\Database\Seeder;

class app_users_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '須川　誠',
        ];
        DB::table('app_users')->insert($param);

        $param = [
            'name' => '大山光',
        ];
        DB::table('app_users')->insert($param);

        $param = [
            'name' => '大野瀬健太',
        ];
        DB::table('app_users')->insert($param);

        $param = [
            'name' => '小山公平',
        ];
        DB::table('app_users')->insert($param);
        
    }
}
