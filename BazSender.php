<?php

declare(strict_types=1);

namespace App;

class BazSender extends Sender
{
    /**
     * Sends data to the Baz crm
     *
     * @param array $data
     * @return int
     */
    public function send(array $data)
    {
        //@todo Do not implement a logic for send specifically. Imagine that it's here.

        return 200;
    }
}

