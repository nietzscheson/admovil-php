<?php

declare(strict_types=1);

namespace Nietzscheson\Admovil\Item;

interface TaxesAwareInterface
{

    /**
     * @return TaxesInterface
     */
    public function getTaxes(): TaxesInterface;

    /**
     * @param TaxesInterface
     */
    public function setTaxes(TaxesInterface $taxes): void;
}