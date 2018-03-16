<?php

namespace Nietzscheson\Admovil;

use Zend\Soap\Client;

class Admovil implements AdmovilInterface
{

    /**
     * @var Client
     */
    protected $client;

    public function __construct()
    {
        $this->client = new Client(AdmovilInterface::ADMOVIL_WDSL);
    }
}
