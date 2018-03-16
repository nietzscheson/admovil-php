<?php

namespace Nietzscheson\Admovil\Voucher\Credential;

interface CredentialInterface extends UserInterface
{

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