<?php

/**
 *(c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code .
 */

namespace Nietzscheson\Admovil\CFDI;

interface CFDICheckinResultInterface extends CFDIResultInterface
{

    /**
     * @return string
     */
    public function getUUID(): string;

    /**
     * @param string
     */
    public function setUUID(string $uuid): void;
}