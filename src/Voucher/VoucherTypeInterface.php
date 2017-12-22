<?php

namespace Nietzscheson\Admovil\Voucher;

interface VoucherTypeInterface
{
    const INGRESS = 'I';
    const EGRESS = 'E';
    const TRANSFER = 'T';
    const PAYROLL = 'N';
    const PAY = 'P';
}