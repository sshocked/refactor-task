<?php

namespace App;

/**
 *
 */
interface FromArrayInterface
{
    /**
     * @param array $data
     * @return $this
     */
    public function fromArray (array $data): self;
}