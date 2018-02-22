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
        factory(App\Category::class, 29)->create();

        App\User::create([
            'name'      => 'Marcelo Nogueira',
            'email'     => 'marcelo@app.com',
            'password'  => bcrypt('123')
        ]);
    }
}
