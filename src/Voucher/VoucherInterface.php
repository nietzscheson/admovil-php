<?php

/**
 * @package Nietzscheson\Admovil\Voucher
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nietzscheson\Admovil\Voucher;

interface VoucherInterface
{
    /**
     * @return int
     */
    public function getVoucher(): int;

    /**
     * @param int
     */
    public function setVoucher(int $voucher): void;
}