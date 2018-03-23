<?php

/**
 * @package Nietzscheson\Admovil
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

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
