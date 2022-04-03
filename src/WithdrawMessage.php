<?php

namespace Roaringstars\WithdrawMessage;

class WithdrawMessage
{       
    public $message;

    function __construct($name) {

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
        return (string)  substr($this->messages[$randomIndex], 0, 32);
    }
}