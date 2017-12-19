<?php

declare(strict_types=1);

namespace Nietzscheson\Admovil;

use Zend\Soap\Client;

class Connect implements ConnectInterface
{

    /**
     * @var Client
     */
    protected $client;

    /**
     * @var CredentialInterface
     */
    protected $credential;

    public function __construct()
    {
        $this->client = new Client(AdmovilInterface::ADMOVIL_WDSL);
    }

    /**
     * {@inheritdoc}
     */
    public function getCredential(): CredentialInterface
    {
        return $this->credential;
    }

    /**
     * {@inheritdoc}
     */
    public function setCredential(CredentialInterface $credential): void
    {
        $this->credential = $credential;
    }
}