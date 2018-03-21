<?php

namespace Nietzscheson\Admovil\CFDI\Item;

use Doctrine\Common\Collections\Collection;

interface ItemsInterface
{


    /**
     * @return Collection
     */
    public function getItems(): Collection;

    /**
     * @param ItemInterface
     */
    public function addItem(ItemInterface $item): void;

    /**
     * @param ItemInterface
     */
    public function removeItem(ItemInterface $item): void;

}