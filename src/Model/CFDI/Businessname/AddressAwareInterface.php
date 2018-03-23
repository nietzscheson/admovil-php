<?php

/**
 * @package Nietzscheson\Admovil\Model\CFDI\Businessname
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nietzscheson\Admovil\Model\CFDI\Businessname;

interface AddressAwareInterface
{

    /**
     * @return AddressInterface
     */
    public function getAddress(): AddressInterface;

    /**
     * @param AddressInterface
     */
    public function setAddress(AddressInterface $address): void;
}