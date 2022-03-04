<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Role::create(
            [
                'nom' => "admin",
                'description' => "the awesome admin dashboard wich provide you all access",
                'slug' => 'this-is-the-first-admin-role'
            ]);
  
            App\User::create(
                    [
                        'name' => 'Dodo',
                        'surname' => 'DAMBA',
                        'email' => 'darth@fake.io',
                        'password' => bcrypt('password'),
                        'role' => 1,
                        'status' => true,
                        'remember_token' => 'adghhdyyyfkj8ds9e8ea8s9rrf6633qeeg',
                        'confirm_token' => 'ad87123yyyfkj8ds9e8ea8s9rrf6633qeeg',
                        'reset_token' => "adghhdyyyfkj8ds9e8ea8s9rrf6633qeeg",
                        'slug' => 'dominique-damba-maoundongone-2018'
                    ]
            );
    }
}
