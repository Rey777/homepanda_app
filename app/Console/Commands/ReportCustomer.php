<?php

namespace App\Console\Commands;

use App\Models\Customer;
use Illuminate\Console\Command;

class ReportCustomer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'customer:transactions {customer_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show transition for selected customer id in EUR currency';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $customerId = $this->argument('customer_id');
        $customer = Customer::find($customerId);
        $customer->convertTransactions();
        if($customer){
            $this->table(
                ['Name', 'Date', 'Value'],
                $customer->transactions->map(function ($transaction) use ($customer){
                    return [$customer->name, $transaction->date->format("d-m-Y"), $transaction->value. " " . $transaction->currency->symbol];
                })
            );
        }
        else
            $this->error("Customer not found");
        
        return 0;
    }
}