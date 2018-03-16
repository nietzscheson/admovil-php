<?php

namespace Nietzscheson\Admovil\Voucher\Credential;

trait UserTrait
{

    /**
     * @var string
     */
    protected $user;

    /**
     * @var string
     */
    protected $password;

    /**
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * @param string $user
     */
    public function setUser(string $user): void
    {
        $this->user = $user;
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
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
}