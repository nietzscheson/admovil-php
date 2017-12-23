<?php

/**
 *(c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code .
 */

namespace Nietzscheson\Admovil\CFDI;

class CFDIResult implements CFDIResultInterface
{

    /**
     * @var string
     */
    private $voucher;

    /**
     * @return string
     */
    public function getVoucher(): string
    {
        return $this->voucher;
    }

    /**
     * @param string $voucher
     */
    public function setVoucher(string $voucher): void
    {
        $this->voucher = $voucher;
    }
}