<?php

namespace Nietzscheson\Admovil;

use Zend\Soap\Client;

class Admovil extends Credential implements AdmovilInterface
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
}
