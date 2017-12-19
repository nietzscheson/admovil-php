<?php

declare(strict_types=1);

namespace Nietzscheson\Admovil;

interface ConnectInterface
{

    /**
     * @return CredentialInterface
     */
    public function getCredential(): CredentialInterface;

    /**
     * @param CredentialInterface
     */
    public function setCredential(CredentialInterface $credential): void;
}