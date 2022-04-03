<?php

namespace Roaringstars\WithdrawMessage;

class WithdrawMessage
{
    /**
     * @var array<string> $messages
     */
    public array $messages;

    public function __construct()
    {
        /**
         * Edit this array please.... have fun! :)
         */
        $this->messages = [
            'Enjoy your sats!',
            'Mashok maseh!',
        ];
    }

    /**
     * Get Random string
     *
     * @return string
     */
    public function random(): string
    {
        $randomIndex = array_rand($this->messages);
        return (string) substr($this->messages[$randomIndex], 0, 32);
    }
}
