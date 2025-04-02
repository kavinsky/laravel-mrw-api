<?php

namespace Kavinsky\MRW\Commands;

use Illuminate\Console\Command;

class MRWCommand extends Command
{
    public $signature = 'mrw-api';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
