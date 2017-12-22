<?php

declare(strict_types=1);

namespace Nietzscheson\Admovil\Voucher\Payment;

interface PaymentFormInterface
{
    const CFDI_PAYMENT_FORM_CASH = '01';
    const CFDI_PAYMENT_FORM_NOMINAL_CHECK = '02';
    const CFDI_PAYMENT_FORM_ELECTRONIC_TRANSFER = '03';
    const CFDI_PAYMENT_FORM_CREDIT_CARD = '04';
    const CFDI_PAYMENT_FORM_WALLET = '05';
    const CFDI_PAYMENT_FORM_ELECTRONIC_MONEY = '06';
    const CFDI_PAYMENT_FORM_PANTRY_VOUCHERS = '08';
    const CFDI_PAYMENT_FORM_DEDIT_CARD = '28';
    const CFDI_PAYMENT_FORM_SERVICE_CARD = '29';
    const CFDI_PAYMENT_FORM_UNDEFINED = '99';
}