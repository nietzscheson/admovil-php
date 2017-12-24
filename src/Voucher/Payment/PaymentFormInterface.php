<?php

declare(strict_types=1);

namespace Nietzscheson\Admovil\Voucher\Payment;

interface PaymentFormInterface
{
    const CASH = '01';
    const CHECK = '02';
    const ELECTRONIC_TRANSFER = '03';
    const CREDIT_CARD = '04';
    const WALLET = '05';
    const ELECTRONIC_MONEY = '06';
    const PANTRY_VOUCHERS = '08';
    const DEDIT_CARD = '28';
    const SERVICE_CARD = '29';
    const UNDEFINED = '99';
}