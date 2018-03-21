<?php

namespace Nietzscheson\Admovil\CFDI\Item;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Items implements ItemsInterface
{


    /**
     * @var Collection
     */
    private $items;

    public function __construct()
    {
        $this->items = new ArrayCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function getItems(): Collection
    {
        return $this->items;
    }

    /**
     * @param ItemInterface $item
     */
    public function addItem(ItemInterface $item): void
    {
        $this->items->add($item);
    }

    /**
     * @param ItemInterface $item
     */
    public function removeItem(ItemInterface $item): void
    {
        $this->items->remove($item);
    }

}