<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\CustomerTransaction;

class CustomerTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        CustomerTransaction::firstOrCreate([
            "customer_id" => 1,
            "date" => new Carbon("2015-04-01"),
            "currency_code" => "GBP",
            "value" => 50
        ]);

        CustomerTransaction::firstOrCreate([
            "customer_id" => 2,
            "date" => new Carbon("2015-04-01"),
            "currency_code" => "USD",
            "value" => 66.1
        ]);

        CustomerTransaction::firstOrCreate([
            "customer_id" => 2,
            "date" => new Carbon("2015-04-02"),
            "currency_code" => "JPY",
            "value" => 12
        ]);

        CustomerTransaction::firstOrCreate([
            "customer_id" => 2,
            "date" => new Carbon("2015-04-02"),
            "currency_code" => "GBP",
            "value" => 6.5
        ]);

        CustomerTransaction::firstOrCreate([
            "customer_id" => 1,
            "date" => new Carbon("2015-04-02"),
            "currency_code" => "GBP",
            "value" => 11.04
        ]);

        CustomerTransaction::firstOrCreate([
            "customer_id" => 1,
            "date" => new Carbon("2015-04-02"),
            "currency_code" => "JPY",
            "value" => 1
        ]);

        CustomerTransaction::firstOrCreate([
            "customer_id" => 1,
            "date" => new Carbon("2015-04-03"),
            "currency_code" => "USD",
            "value" => 23.05
        ]);

        CustomerTransaction::firstOrCreate([
            "customer_id" => 2,
            "date" => new Carbon("2015-04-04"),
            "currency_code" => "JPY",
            "value" => 6.5
        ]);


    }
}
