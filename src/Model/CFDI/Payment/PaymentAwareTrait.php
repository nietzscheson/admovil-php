<?php

declare(strict_types=1);

namespace Nietzscheson\Admovil\Model\CFDI\Payment;

trait PaymentAwareTrait
{

    /**
     * @var PaymentInterface
     */
    private $payment;

    /**
     * @return PaymentInterface
     */
    public function getPayment(): PaymentInterface
    {
        return $this->payment;
    }

    /**
     * @param PaymentInterface
     */
    public function setPayment(PaymentInterface $payment): void
    {
        $this->payment = $payment;
    }
}