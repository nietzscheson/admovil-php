<?php

/*
 * (c) Cristian Angulo Nova < @nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code .
 */

namespace Nietzscheson\Admovil\CFDI;

use Nietzscheson\Admovil\AdmovilInterface;
use Nietzscheson\Admovil\Item\ItemsInterface;
use Nietzscheson\Admovil\Voucher\VoucherResultInterface;

interface CFDIDetailInterface extends AdmovilInterface
{
    /**
     * @param ItemsInterface $items
     * @param CFDIResultInterface $voucher
     */
    public function execute(ItemsInterface $items, CFDIResultInterface $voucher): void;
}