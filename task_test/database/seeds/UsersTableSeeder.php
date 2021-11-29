<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => Hash::make('password'),
        // ]);

        // 自身で設定する場合
        DB::table('users')->insert([
            ['name' => 'あああ',
            'email' => 'test@gmail.com',
            'password' => Hash::make('password123'),
        ],[
            'name' => 'いいい',
            'email' => 'test2@gmail.com',
            'password' => Hash::make('password123'),
        ],[
            'name' => 'ううう',
            'email' => 'test3@gmail.com',
            'password' => Hash::make('password123'),
        ]
        ]);
    }
}