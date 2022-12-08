<?php

/**
 *
 */
class UserValidator
{
    /**
     * @var array
     */
    private array $data;

    /**
     * @var array
     */
    private array $errorMessages = [];

    /**
     * @param StrValidator $strValidator
     */
    public function __construct(private StrValidator $strValidator)
    {
    }

    /**
     * @return bool
     */
    public function validate(): bool
    {
        if(!isset($this->data['user'])) {
            $this->errorMessages[] = 'Missing user';
        }

        if(!isset($this->data['password'])) {
            $this->errorMessages[] =  'Missing password';
        }

        if(count($this->errorMessages) > 0) {
            return false;
        }

        if($this->strValidator->setStr($this->data['user'])->setMin(3)->setMax(12)->validate()) {
            $this->errorMessages[] =  'Invalid user';
        }

        if($this->strValidator->setStr($this->data['password'])->setMin(8)->setMax(12)->validate()) {
            $this->errorMessages[] ='Invalid user';
        }

        return count($this->errorMessages) === 0;
    }

    /**
     * @return array
     */
    public function getErrorMessages(): array
    {
        return $this->errorMessages;
    }

    /**
     * @param array $data
     * @return UserValidator
     */
    public function setData(array $data): UserValidator
    {
        $this->data = $data;

        return $this;
    }

}