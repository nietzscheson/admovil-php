<?php

/**
 * @package Nietzscheson\Admovil\Model
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nietzscheson\Admovil\Model;

use Nietzscheson\Admovil\Currency\CurrencyInterface;
use Nietzscheson\Admovil\Currency\ExchangeRateInterface;
use Nietzscheson\Admovil\Model\CFDI\CredentialInterface;
use Nietzscheson\Admovil\NotesInterface;
use Nietzscheson\Admovil\Model\CFDI\Payment\PaymentAwareInterface;
use Nietzscheson\Admovil\Model\CFDI\Businessname\BusinessnameAwareInterface;

interface CFDIInterface extends CredentialInterface, CurrencyInterface, ExchangeRateInterface, NotesInterface, PaymentAwareInterface, BusinessnameAwareInterface
{

    /**
     * @return string
     */
    public function getBillingType();

    /**
     * @param string
     */
    public function setBillingType(string $billType);

    /**
     * @return string
     */
    public function getVoucherType(): string;

    /**
     * @param string
     */
    public function setVoucherType(string $voucherType): void;

    /**
     * @return string
     */
    public function getBranchOffice(): string;

    /**
     * @param string
     */
    public function setBranchOffice(string $branchOffice): void;

    /**
     * @return string
     */
    public function getCFDIUse(): string;

    /**
     * @param string
     */
    public function setCFDIUse(string $cfdiUse): void;

    /**
     * @return string
     */
    public function getConfirmation(): string;

    /**
     * @param string
     */
    public function setConfirmation(string $confirmation): void;
}