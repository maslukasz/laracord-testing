<?php

namespace App\Commands;

use Laracord\Commands\Command;

class Embed extends Command
{
    /**
     * The command name.
     *
     * @var string
     */
    protected $name = 'embed';

    /**
     * The command description.
     *
     * @var string
     */
    protected $description = 'The embed command.';

    /**
     * Determines whether the command requires admin permissions.
     *
     * @var bool
     */
    protected $admin = false;

    /**
     * Determines whether the command should be displayed in the commands list.
     *
     * @var bool
     */
    protected $hidden = false;

    /**
     * Handle the command.
     *
     * @param  \Discord\Parts\Channel\Message  $message
     * @param  array  $args
     * @return void
     */
    public function handle($message, $args)
    {
        return $this
            ->message()
            ->title('Embed')
            ->content('Hello world!')
            ->send($message);
    }
}
