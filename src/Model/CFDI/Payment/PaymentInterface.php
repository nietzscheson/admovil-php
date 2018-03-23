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

interface PaymentInterface
{

    /**
     * @return string
     */
    public function getCondition(): string;

    /**
     * @param string
     */
    public function setCondition(string $condition): void;

    /**
     * @return string
     */
    public function getForm(): string;

    /**
     * @param string
     */
    public function setForm(string $form): void;

    /**
     * @return string
     */
    public function getAccount(): string;

    /**
     * @param string
     */
    public function setAccount(string $account): void;

    /**
     * @return string
     */
    public function getMethod(): string;

    /**
     * @param string
     */
    public function setMethod(string $method): void;

}