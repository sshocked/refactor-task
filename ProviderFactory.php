<?php

namespace App;

/**
 *
 */
class ProviderFactory
{
    /**
     */
    public function __construct()
    {
    }

    /**
     * @return SendInterface
     */
    public function createProvider(string $class, array $settings): SendInterface
    {
        return new $class($settings);
    }
}