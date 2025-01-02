<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ImportJson extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import-json';
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // php artisan import:json
        if ($data) {
            foreach ($data as $item) {
                User::updateOrCreate(
                    ['id' => $item['id']],
                    [
                        'name' => $item['name'],
                        'email' => $item['email'],
                    ]
                );
            }
            $this->info('Data imported successfully!');
        } else {
            $this->error('Failed to import data. Please check the JSON file.');
        }
    }
}
