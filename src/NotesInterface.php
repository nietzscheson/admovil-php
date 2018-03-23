<?php

/**
 * @package Nietzscheson\Admovil
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nietzscheson\Admovil;

interface NotesInterface
{

    /**
     * @return string
     */
    public function getNotes(): string;

    /**
     * @param string $notes
     */
    public function setNotes(string $notes): void;

}