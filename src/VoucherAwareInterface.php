<?php

declare(strict_types=1);

namespace Nietzscheson\Admovil;

interface VoucherawareInterface
{

    /**
     * @return VoucherInterface
     */
    public function getVoucher(): VoucherInterface;

    /**
     * @param VoucherInterface $voucher
     */
    public function setVoucher(VoucherInterface $voucher): void;

}