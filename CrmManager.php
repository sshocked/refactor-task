<?php

declare(strict_types=1);

namespace App;

use InvalidArgumentException;

/**
 * Class CrmManager
 * @package App
 */
class CrmManager
{
    private BazSender $client;

    /**
     * @var array
     */
    private $settings;

    public function __construct(array $settings)
    {
        if (empty($settings['user'])) {
            throw new InvalidArgumentException('User must be set!');
        }

        if (empty($settings['passwd'])) {
            throw new InvalidArgumentException('Password must be set!');
        }

        $this->settings = $settings;
        $this->client = new BazSender();
    }

    /**
     * Sends the person to a crm
     *
     * @param array $clientEntity
     * @return int
     */
    public function sendPerson(array $clientEntity): int
    {
        $this->client->setCredentials($this->settings);

        return $this->client->send($clientEntity);
    }
}
