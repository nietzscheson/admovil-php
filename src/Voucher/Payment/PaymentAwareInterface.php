<?php

declare(strict_types=1);

namespace Nietzscheson\Admovil\Voucher\Payment;

interface PaymentAwareInterface
{

    /**
     * @return PaymentInterface
     */
    public function getPayment(): PaymentInterface;

    /**
     * @param PaymentInterface $payment
     */
    public function setPayment(PaymentInterface $payment): void;
}