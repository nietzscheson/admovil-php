<?php

/**
 * @package Nietzscheson\Admovil\Related
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nietzscheson\Admovil\Related;

use Nietzscheson\Admovil\CFDI\CFDICheckinResultInterface;

interface RelatedInterface extends CFDICheckinResultInterface
{

    /**
     * @return string
     */
    public function getRelationType(): string ;

    /**
     * @param string $relationType
     */
    public function setRelationType(string $relationType): void ;

}