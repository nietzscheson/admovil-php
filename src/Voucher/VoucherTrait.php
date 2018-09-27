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

trait VoucherTrait
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
     * @param string
     */
    public function setVoucher(string $voucher): void
    {
        $this->voucher = $voucher;
    }
}