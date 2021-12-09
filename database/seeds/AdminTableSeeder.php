<?php

use App\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // \DB::table('admin')->truncate();
      Admin::create([
        'nama' => 'Admin',
        'email' => 'admin@gmail.com',
        'tanggal_lahir' => '1990-10-10',
        'password' => Hash::make('123123123'),
      ]);
    }
}
