<?php

declare(strict_types=1);

namespace Nietzscheson\Admovil;

interface TaxesAwareInterface
{

    /**
     * @return TaxesInterface
     */
    public function getTaxes(): TaxesInterface;

    /**
     * @param TaxesInterface $taxes
     */
    public function setTaxes(TaxesInterface $taxes): void;
}