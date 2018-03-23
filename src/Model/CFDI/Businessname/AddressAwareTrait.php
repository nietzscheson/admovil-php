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

trait AddressAwareTrait
{

    /**
     * @var AddressInterface
     */
    private $address;

    /**
     * @return AddressInterface
     */
    public function getAddress(): AddressInterface
    {
        return $this->address;
    }

    /**
     * @param AddressInterface
     */
    public function setAddress(AddressInterface $address): void
    {
        $this->address = $address;
    }
}