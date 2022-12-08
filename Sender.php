<?php

declare(strict_types=1);

namespace App;

final class Sender
{
    protected array $settings;

    public function setCredentials(array $settings)
    {
        $this->settings = $settings;
    }
}