<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([ //建立預設管理者帳號
            'username'=>'admin',          // 帳號
            'password'=>bcrypt('admin'),  // bcrypt是用來加密密碼
        ]);
    
    }
}
