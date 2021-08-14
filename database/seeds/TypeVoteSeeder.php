<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeVoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_vote')->insert([
            'total_vote' => 1, // gratis
            'description' => 'Free',
        ]);

        DB::table('type_vote')->insert([
            'total_vote' => 10,
            'description' => '10.000 Gopay',
        ]);

        DB::table('type_vote')->insert([
            'total_vote' => 20,
            'description' => '20.000 Gopay',
        ]);

        DB::table('type_vote')->insert([
            'total_vote' => 50,
            'description' => '50.000 Gopay',
        ]);

        DB::table('type_vote')->insert([
            'total_vote' => 100,
            'description' => '100.000 Gopay',
        ]);
    }
}
