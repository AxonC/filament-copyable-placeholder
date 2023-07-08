<?php

namespace AxonC\FilamentCopyablePlaceholder\Commands;

use Illuminate\Console\Command;

class FilamentCopyablePlaceholderCommand extends Command
{
    public $signature = 'filament-copyable-placeholder';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
