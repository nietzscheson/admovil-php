<?php

declare(strict_types=1);

namespace Nietzscheson\Admovil\Voucher;

use Nietzscheson\Admovil\NotesTrait;
use Nietzscheson\Admovil\Voucher\Payment\PaymentAwareTrait;
use Nietzscheson\Admovil\Voucher\Businessname\BusinessnameAwareTrait;

class Voucher extends Credential implements VoucherInterface
{
    use NotesTrait;
    use PaymentAwareTrait;
    use BusinessnameAwareTrait;

    /**
     * @var string
     */
    private $billingType;

    /**
     * @var string
     */
    private $voucherType;

    /**
     * @var string
     */
    private $branchOffice;

    /**
     * @var $subTotal
     */
    private $subTotal;

    /**
     * @var $total
     */
    private $total;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var string
     */
    private $exchangeRate;

    /**
     * @var string
     */
    private $cfdiUse;

    /**
     * @var string
     */
    private $confirmation;

    /**
     * {@inheritdoc}
     */
    public function getBillingType(): string
    {
        return $this->billingType;
    }

    /**
     * {@inheritdoc}
     */
    public function setBillingType(string $billingType): void
    {
        $this->billingType = $billingType;
    }

    /**
     * {@inheritdoc}
     */
    public function getVoucherType(): string
    {
        return $this->voucherType;
    }

    /**
     * {@inheritdoc}
     */
    public function setVoucherType(string $voucherType): void
    {
        $this->voucherType = $voucherType;
    }

    /**
     * {@inheritdoc}
     */
    public function getBranchOffice(): string
    {
        return $this->branchOffice;
    }

    /**
     * {@inheritdoc}
     */
    public function setBranchOffice(string $branchOffice): void
    {
        $this->branchOffice = $branchOffice;
    }

    /**
     * {@inheritdoc}
     */
    public function getSubTotal()
    {
        return $this->subTotal;
    }

    /**
     * {@inheritdoc}
     */
    public function setSubTotal($subTotal): void
    {
        $this->subTotal = $subTotal;
    }

    /**
     * {@inheritdoc}
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * {@inheritdoc}
     */
    public function setTotal($total): void
    {
        $this->total = $total;
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * {@inheritdoc}
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * {@inheritdoc}
     */
    public function getExchangeRate(): string
    {
        return $this->exchangeRate;
    }

    /**
     * {@inheritdoc}
     */
    public function setExchangeRate(string $exchangeRate): void
    {
        $this->exchangeRate = $exchangeRate;
    }

    /**
     * {@inheritdoc}
     */
    public function getCfdiUse(): string
    {
        return $this->cfdiUse;
    }

    /**
     * {@inheritdoc}
     */
    public function setCfdiUse(string $cfdiUse): void
    {
        $this->cfdiUse = $cfdiUse;
    }

    /**
     * {@inheritdoc}
     */
    public function getConfirmation(): string
    {
        return $this->confirmation;
    }

    /**
     * {@inheritdoc}
     */
    public function setConfirmation(string $confirmation): void
    {
        $this->confirmation = $confirmation;
    }
}