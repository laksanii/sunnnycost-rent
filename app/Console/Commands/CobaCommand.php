<?php

namespace App\Console\Commands;

use App\Models\Order;
use Illuminate\Console\Command;

class CobaCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'coba:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ini nyoba ya todddd';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Order::where('payment_status', 'belum lunas')->update(['payment_status' => 'lunas']);
        
        $this->info("Anjass nyoba");
    }
}