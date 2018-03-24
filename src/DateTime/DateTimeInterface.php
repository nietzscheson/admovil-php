<?php

/**
 * @package Nietzscheson\Admovil\DateTime
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nietzscheson\Admovil\DateTime;

use DateTimeInterface as DateTimeInterfaceBase;

interface DateTimeInterface extends DateTimeInterfaceBase
{

    const ADMOVIL = 'Y-m-dTh:i:s';

}