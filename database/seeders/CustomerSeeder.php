<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Customer::firstOrCreate([
            'name' => "Customer 1",
        ]);


        Customer::firstOrCreate([
            'name' => "Customer 2",
        ]);
    }
}
