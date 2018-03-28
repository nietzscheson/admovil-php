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
     * @var string
     */
    private $relationType;

    /**
     * {@inheritdoc}
     */
    public function getRelationType(): ?string
    {
        return $this->relationType;
    }

    /**
     * {@inheritdoc}
     */
    public function setRelationType(string $relationType): void
    {
        $this->relationType = $relationType;
    }
}