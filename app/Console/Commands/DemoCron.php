<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class DemoCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        // Sample
        Log::info("Cron job Berhasil di jalankan " . date('Y-m-d H:i:s'));

        // Kita bisa menyimpan logic disini
        // Contoh: Update data di database yang statusnya belum diproses selama 24 jam menjadi FAILED
        // $expired = Carbon::now()->subHour(24);
        // $transaction = Transaction::where('transaction_status', '=', 'PENDING')->where('created_at', '<=', $expired)->first();
        // $transaction->transaction_status = 'FAILED';
        // $transaction->save();
    }
}
