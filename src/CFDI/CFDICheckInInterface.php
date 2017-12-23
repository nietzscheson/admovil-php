<?php

/*
 * (c) Cristian Angulo Nova < @nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code .
 */

namespace Nietzscheson\Admovil\CFDI;

use Nietzscheson\Admovil\AdmovilInterface;
use Nietzscheson\Admovil\Voucher\CFDIException;
use Nietzscheson\Admovil\Voucher\VoucherInterface;
use Nietzscheson\Admovil\Voucher\VoucherResultInterface;

interface CFDICheckInInterface extends AdmovilInterface
{
    /**
     * @param CFDIResultInterface $voucher
     */
    public function execute(CFDIResultInterface $voucher): void;
}