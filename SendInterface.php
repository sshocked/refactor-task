<?php

namespace App;

/**
 *
 */
interface SendInterface
{
    /**
     * @param FromArrayInterface $dto
     * @return void
     */
    public function send(FromArrayInterface $dto): void;
}