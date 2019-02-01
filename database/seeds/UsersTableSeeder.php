<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'nama' => 'Jon Snow',
                'username' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('secret'),
                'is_admin' => 1,
                'logo_number' => 1,
                'hak' => json_encode(['admin','user-entry','inventory-master','inventory-entry','inventory-view','peminjaman-entry','peminjaman-view']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Daenerys Targaryen',
                'username' => 'member',
                'email' => 'member@example.com',
                'password' => Hash::make('secret'),
                'is_admin' => 0,
                'logo_number' => 2,
                'hak' => json_encode(['inventory-view','peminjaman-view']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
