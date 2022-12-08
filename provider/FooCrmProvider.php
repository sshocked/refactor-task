<?php

declare(strict_types=1);

namespace app\provider;

use App\CrmProvider;
use App\FromArrayInterface;
use App\SendInterface;

class FooCrmProvider extends CrmProvider implements SendInterface
{
    /**
     * Sends data to the Baz crm
     *
     * @param FromArrayInterface $dto
     * @return void
     */
    public function send(FromArrayInterface $dto): void
    {
        try {
            //@todo Do not implement a logic for send specifically. Imagine that it's here.
        } catch (\Exception $e) {
            //@todo Do not implement a error logic for send specifically. Imagine that it's here.
        }
    }
}

