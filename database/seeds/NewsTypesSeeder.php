<?php

use Illuminate\Database\Seeder;

class NewsTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['World', 'Latest', 'International', 'National', 'Political', 'Lifestyle', 'Fashion', 'Gadget', 'Sports'];

        foreach ($types as $key) {
            DB::table('types')->insert([
                'type' => $key,
            ]);
        }
    }
}
