<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(5)->create();
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
        ]);
        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel,javascript',
        //     'company' => 'Acne Corp',
        //     'location' => 'Manila, PH',
        //     'email' => 'email@email.com',
        //     'website' => ' https://www.google.com',
        //     'description' => 'asjkd asdlfj alsdj flksadjf lskdajf
        //     asjkdhfjksa sadf hsadkjfh sadjkf
        //     asdjkfksjadfhsadjk asdlkfj asdlfk jsad 
        //     aslkdfjlskad sadf klsjadfl  '
        // ]);
        // Listing::create([
        //     'title' => 'React Senior Developer',
        //     'tags' => 'React,javascript',
        //     'company' => 'Naster Corp',
        //     'location' => 'Manila, PH',
        //     'email' => 'email2@email.com',
        //     'website' => ' https://www.google.com',
        //     'description' => 'asjkd asdlfj alsdj flksadjf lskdajf
        //     asjkdhfjksa sadf hsadkjfh sadjkf
        //     asdjkfksjadfhsadjk asdlkfj asdlfk jsad 
        //     aslkdfjlskad sadf klsjadfl  '
        // ]);
    }


}
