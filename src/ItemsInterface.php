<?php

namespace Nietzscheson\Admovil;

use Doctrine\Common\Collections\Collection;

interface ItemsInterface
{


    /**
     * @return Collection
     */
    public function getItems(): Collection;

    /**
     * @param ItemInterface $item
     */
    public function addItem(ItemInterface $item): void;

    /**
     * @param ItemInterface $item
     */
    public function removeItem(ItemInterface $item): void;

}