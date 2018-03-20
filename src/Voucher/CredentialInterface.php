<?php

namespace Nietzscheson\Admovil\Voucher;

interface CredentialInterface
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

    /**
     * @return string
     */
    public function getRFC(): string;

    /**
     * @param string $rfc
     */
    public function setRFC(string $rfc): void;

    /**
     * @return string
     */
    public function getSystemId(): string;

    /**
     * @param string $id
     */
    public function setSystemId(string $id): void;
}