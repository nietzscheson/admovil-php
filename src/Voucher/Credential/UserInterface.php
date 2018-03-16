<?php

namespace Nietzscheson\Admovil\Voucher\Credential;

interface UserInterface
{

    /**
     * @return string
     */
    public function getUser(): string;

    /**
     * @param string $user
     */
    public function setUser(string $user): void;

    /**
     * @return string
     */
    public function getPassword(): string ;

    /**
     * @param string $password
     */
    public function setPassword(string $password): void;
}