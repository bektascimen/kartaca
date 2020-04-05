<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IsletmeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('isletme')->insert(['isletme_adi' => 'Kartaca']);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
