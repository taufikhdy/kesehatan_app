<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'uks_siswa',
                'email'=>'ukssiswa@gmail.com',
                'role'=>'uks_siswa',
                'password'=>bcrypt('siswasehat')
             ],
             [
                'name'=>'uks_siswi',
                'email'=>'ukssiswi@gmail.com',
                'role'=>'uks_siswi',
                'password'=>bcrypt('siswisehat')
             ],
             [
                'name'=>'admin',
                'email'=>'poskestren@gmail.com',
                'role'=>'poskes',
                'password'=>bcrypt('poskesaltie')
             ],
        ];

        foreach($userData as $key => $val){
            User::create($val);

        }

    }
}
