<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MemoryUsageCommand extends Command
{
    protected $signature = 'memory:usage';

    protected $description = 'Display the current memory usage of the application.';

    public function handle(): void
    {
        $memoryUsage = memory_get_usage(true) / 1024 / 1024;

        $this->info("Current memory usage: {$memoryUsage} MB");
    }
}
