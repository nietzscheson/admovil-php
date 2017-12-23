<?php

/**
 *(c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code .
 */

namespace Nietzscheson\Admovil\CFDI;

interface CFDIResultInterface
{

    /**
     * @return string
     */
    public function getVoucher(): string;

    /**
     * @param string
     */
    public function setVoucher(string $voucher): void;
}