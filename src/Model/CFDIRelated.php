<?php

/**
 * @package Nietzscheson\Admovil\Model
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nietzscheson\Admovil\Model;

use Nietzscheson\Admovil\Voucher\UUIDTrait;

class CFDIRelated implements CFDIRelatedInterface
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