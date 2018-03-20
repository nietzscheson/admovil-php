<?php

declare(strict_types=1);

namespace Nietzscheson\Admovil\Voucher;

use Nietzscheson\Admovil\NotesInterface;
use Nietzscheson\Admovil\Voucher\Payment\PaymentAwareInterface;
use Nietzscheson\Admovil\Voucher\Businessname\BusinessnameAwareInterface;


interface VoucherInterface extends CredentialInterface, NotesInterface, PaymentAwareInterface, BusinessnameAwareInterface
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
    public function getCurrency(): string;

    /**
     * @param string
     */
    public function setCurrency(string $currency): void;

    /**
     * @return string
     */
    public function getExchangeRate(): string;

    /**
     * @param string
     */
    public function setExchangeRate(string $exchangeRate): void;

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