<?php

/**
 * @package Nietzscheson\Admovil\CFDI
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nietzscheson\Admovil\CFDI;

use Nietzscheson\Admovil\AdmovilInterface;
use Nietzscheson\Admovil\Collection\ItemsInterface;
use Nietzscheson\Admovil\Voucher\VoucherInterface;

interface CFDIDetailInterface extends AdmovilInterface
{
    /**
     * @param ItemsInterface $items
     * @param VoucherInterface $voucher
     */
    public function execute(ItemsInterface $items, VoucherInterface $voucher): void;
}