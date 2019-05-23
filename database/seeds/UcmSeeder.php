<?php

use Illuminate\Database\Seeder;

class UcmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\User::each(function($user) {
            factory(App\Models\Ucm::class, 3)->create([
                'user_id' => $user->id
            ]);
        });
    }
}
