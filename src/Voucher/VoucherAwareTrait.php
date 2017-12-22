<?php

declare(strict_types=1);

namespace Nietzscheson\Admovil\Voucher;

trait VoucherAwareTrait
{

    /**
     * @var VoucherInterface
     */
    private $voucher;

    /**
     * @return VoucherInterface
     */
    public function getVoucher(): VoucherInterface
    {
        return $this->voucher;
    }

    /**
     * @param VoucherInterface $voucher
     */
    public function setVoucher(VoucherInterface $voucher): void
    {
        $this->voucher = $voucher;
    }

}