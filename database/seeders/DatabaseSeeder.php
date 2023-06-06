<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //tao moi admin

        $user = new User();

        $user->name = "adminUser";

        $user->email = "admin@gmail.com";

        $user->password = bcrypt("admin");

        $user->admin = 1;

        $user->save();

        //tao user binh thuong

        $user = new User();

        $user->name = "user";

        $user->email = "user@gmail.com";

        $user->password = bcrypt("user");

        $user->admin = 0;

        $user->save();

    }
}
