<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            'status_value' => 'accept',
            'status_name' => 'Прийнято',
        ]);
        DB::table('statuses')->insert([
            'status_value' => 'sent',
            'status_name' => 'Відправлено',
        ]);
        DB::table('statuses')->insert([
            'status_value' => 'cancel',
            'status_name' => 'Відмінено',
        ]);
    }
}
