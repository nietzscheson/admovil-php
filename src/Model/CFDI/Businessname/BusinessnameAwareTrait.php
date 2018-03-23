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

trait BusinessnameAwareTrait
{

    private $businessname;

    /**
     * @return BusinessnameInterface
     */
    public function getBusinessName(): BusinessnameInterface
    {
        return $this->businessname;
    }

    /**
     * @param BusinessnameInterface
     */
    public function setBusinessName(BusinessnameInterface $businessname)
    {
        $this->businessname = $businessname;
    }
}