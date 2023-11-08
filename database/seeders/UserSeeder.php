<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
           [
                'name'=> 'Admin',
                'firstname'=>'admin',
                'phone'=>'91038021',
                'email'=> 'admin@gmail.com',
                'role'=> 'admin',
                'status'=>'active',
                'password'=>bcrypt('password'),
           ],
           [
                'name'=> 'Vendor',
                'firstname'=>'Vend',
                'phone'=>'98526354',
                'email'=> 'vendor@gmail.com',
                'role'=> 'vendor',
                'status'=>'active',
                'password'=>bcrypt('password'),
           ],
           [
                'name'=> 'Customer',
                'firstname'=>'custom',
                'phone'=>'96352412',
                'email'=> 'customer@gmail.com', 
                'role'=> 'customer',
                'status'=>'active',
                'password'=>bcrypt('password'),
           ]
        ]);
    }
}
