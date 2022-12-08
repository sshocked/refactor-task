<?php

namespace App;

use app\provider\BazCrmProvider;
use app\provider\FooCrmProvider;

/**
 *  Provider configuration
 */
class ProviderConfiguration
{
    /**
     * @return array
     */
    public function getConfig(): array
    {
        return [
            'providers' => [
                BazCrmProvider::class => [
                    'user' => 'username',
                    'password' => 'pass',
                ],
                FooCrmProvider::class => [
                    'token' => 'secret',
                ],
            ],
        ];
    }
}