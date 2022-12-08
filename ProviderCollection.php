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
    public function __construct(private array $providers, ProviderConfiguration $config, ProviderFactory $factory)
    {
        foreach ($config->getConfig()['providers'] as $provider => $settings) {
            $this->providers[] = $factory->createProvider($provider, $settings);
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