<?php

namespace App;

/**
 *
 */
class ProviderCollection
{
    /**
     * @param array $providers
     * @param ProviderConfiguration $config
     */
    public function __construct(private array $providers, ProviderConfiguration $config)
    {
        foreach ($config->getConfig()['providers'] as $provider => $settings) {
            $this->providers[] = new $provider($settings);
        }
    }

    /**
     * @return array|SendInterface[]
     */
    public function getProviders(): array
    {
        return $this->providers;
    }
}