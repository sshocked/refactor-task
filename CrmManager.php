<?php

declare(strict_types=1);

namespace App;

use app\dto\UserDto;

/**
 * Class CrmManager
 * @package App
 */
class CrmManager
{
    /**
     * @param ProviderCollection $providers
     * @param \UserValidator $validator
     * @throws \Exception
     */
    public function __construct(private readonly ProviderCollection $providers, private \UserValidator $validator)
    {
    }

    /**
     * Sends the person to a crm
     *
     * @param array $data
     * @throws \Exception
     */
    public function sendPerson(array $data): void
    {
        if(!$this->validator->setData($data)->validate()) {
            $errorMsg = sprintf("Validation error: %s", json_encode($this->validator->getErrorMessages(), JSON_UNESCAPED_UNICODE));
            throw new \Exception($errorMsg);
        }

        try {
            $dto = (new UserDto())->fromArray($data);
            foreach ($this->providers->getProviders() as $provider) {
                $provider->send($dto);
            }
        } catch (\Exception $e) {
            throw new \Exception(sprintf('Error on executing send happened: %s', $e->getMessage()));
        }
    }
}
