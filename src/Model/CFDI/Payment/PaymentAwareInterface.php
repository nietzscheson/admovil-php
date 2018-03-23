<?php

/**
 * @package Nietzscheson\Admovil\Model\CFDI\Payment
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nietzscheson\Admovil\Model\CFDI\Payment;

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