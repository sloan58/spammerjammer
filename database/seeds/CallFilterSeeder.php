<?php

use Illuminate\Database\Seeder;

class CallFilterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Ucm::each(function($ucm) {
            factory(App\Models\CallFilter::class, 10)->create([
                'ucms_id' => $ucm->id
            ]);
        });
    }
}
