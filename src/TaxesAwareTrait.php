<?php

declare(strict_types=1);

namespace Nietzscheson\Admovil;

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
     * @param TaxesInterface $taxes
     */
    public function setTaxes(TaxesInterface $taxes): void
    {
        $this->taxes = $taxes;
    }
}