<?php

declare(strict_types=1);

namespace Nietzscheson\Admovil\Item;

trait TaxesAwareTrait
{

    /**
     * @var TaxesInterface
     */
    private $taxes;

    /**
     * @return TaxesInterface
     */
    public function getTaxes(): TaxesInterface
    {
        return $this->taxes;
    }

    /**
     * @param TaxesInterface
     */
    public function setTaxes(TaxesInterface $taxes): void
    {
        $this->taxes = $taxes;
    }
}