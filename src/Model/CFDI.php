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

use Nietzscheson\Admovil\Currency\CurrencyTrait;
use Nietzscheson\Admovil\Currency\ExchangeRateTrait;
use Nietzscheson\Admovil\Model\CFDI\Credential;
use Nietzscheson\Admovil\NotesTrait;
use Nietzscheson\Admovil\Model\CFDI\Payment\PaymentAwareTrait;
use Nietzscheson\Admovil\Model\CFDI\Businessname\BusinessnameAwareTrait;

class CFDI extends Credential implements CFDIInterface
{
    use CurrencyTrait;
    use ExchangeRateTrait;
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