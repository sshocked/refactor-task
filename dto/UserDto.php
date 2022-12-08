<?php

namespace app\dto;

/**
 *
 */
class UserDto implements \App\FromArrayInterface
{
    /**
     * @var string
     */
    private string $user;
    /**
     * @var string
     */
    private string $password;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * @param string $user
     * @return $this
     */
    public function setUser(string $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return $this
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @param $data
     * @return $this
     */
    public function fromArray($data): self
    {
        $this->setUser($data['user']);
        $this->setPassword($data['password']);

        return $this;
    }
}