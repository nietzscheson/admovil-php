<?php

/**
 * @package Nietzscheson\Admovil\CFDI\CFDIRelatedData
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nietzscheson\Admovil\CFDI\CFDIRelatedData;

use Nietzscheson\Admovil\Voucher\UUIDTrait;
use Nietzscheson\Admovil\Voucher\VoucherTrait;

class CFDIRelatedData implements CFDIRelatedDataInterface
{

    use UUIDTrait;

    /**
     * @var int
     */
    private $relationType;

    /**
     * {@inheritdoc}
     */
    public function getRelationType(): int
    {
        return $this->relationType;
    }

    /**
     * {@inheritdoc}
     */
    public function setRelationType(int $relationType): void
    {
        $this->relationType = $relationType;
    }
}