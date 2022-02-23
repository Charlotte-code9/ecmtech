<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Twilio\Rest\Client;
use App\Models\BorrowedItems;
use Illuminate\Console\Command;

class SMSReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reminders:sms';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remind borrowers for return';

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
        $allBorrowedItems = BorrowedItems::whereDate('returnd', '=', now()->add('1 day'))->get();

        if (count($allBorrowedItems) > 0) {
            foreach ($allBorrowedItems as $item) {
                $this->info("{$item->user->name} number is {$item->user->mobile}");

                $client  = new Client(env('TWILIO_ACCOUNT_SID'), env('TWILIO_AUTH_TOKEN'));
                $client->messages->create($item->user->mobile, [
                    'from' => env('TWILIO_PHONE_NUMBER'),
                    'body' => "Your borrowed item: {$item->bdate} is due tomorrow. Please return it on time. Thanks!"
                ]);
            }
        }
    }
}
