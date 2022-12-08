<?php

namespace App;

/**
 * Базовый класс провайдера
 */
class CrmProvider
{
    /**
     * @param array $settings
     */
    public function __construct(private readonly array $settings)
    {

    }
}