<?php

/**
 * @package Nietzscheson\Admovil\Collection
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nietzscheson\Admovil\Collection;

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