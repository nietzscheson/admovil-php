<?php

namespace Nietzscheson\Admovil;

interface VoucherTypeInterface
{
    const CFDI_VOUCHER_TYPE_INGRESS = 'I';
    const CFDI_VOUCHER_TYPE_EGRESS = 'E';
    const CFDI_VOUCHER_TYPE_TRANSFER = 'T';
    const CFDI_VOUCHER_TYPE_PAYROLL = 'N';
    const CFDI_VOUCHER_TYPE_PAY = 'P';
}