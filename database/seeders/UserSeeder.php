<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    protected  $name = [
        'Daffa Hanif Rabbanee',
        'Ariq Jusuf Habibie',
        'Ibrahim Ahmad',
        'Arrijal Bintang',
        'Bintang Fabian',
        'Abdul Aziz',
        'Khafid Fuadi',
        'Mufid Hilmy',
        'Abdullah Said',
        'Arkan Adil Wicaksono',
        'Adzka Jaisy',
        'Muhammad Rifky',
        'Muhammad Haikal Faruq',
        'Ravy M',
        'Fitiyan Ilham Wahyudi',
        'Nashir Muhammad',
        'Achmad Divo',
        'Yusuf Edogawa',
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < count($this->name); $i++) {
            $int = mt_rand(1262055681,1262055681);
            $username = explode(' ', $this->name[$i], 3);
            $email = explode(' ', $this->name[$i], 3);
            $user = new User([
                'name' => $this->name[$i],
                'username' => strtolower($username[0]) . strtolower($username[1]) . '123',
                'profile' => 'An enthusiastic boy who had unlimited money',
                'gender' => 'Male',
                'dob' => date("Y-m-d", $int),
                'address' => '1021 Redihi Way',
                'hp' => '(781) 271-5814',
                'email' => strtolower($email[0]) . strtolower($email[1]) . '@albeline.app',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            $user->save();
        }
    }
}
