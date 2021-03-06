<?php

/**
 * @package spec\Nietzscheson\CFDI
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace spec\Nietzscheson\Admovil\CFDI;

use Nietzscheson\Admovil\CFDI\CFDI;
use Nietzscheson\Admovil\CFDI\CFDICancelInterface;
use Nietzscheson\Admovil\CFDI\CFDICancelResultInterface;
use Nietzscheson\Admovil\CFDI\CFDICheckIn;
use Nietzscheson\Admovil\CFDI\CFDIDetail;
use Nietzscheson\Admovil\Collection\Items;
use Nietzscheson\Admovil\Exception\CFDICheckinException;
use Nietzscheson\Admovil\Exception\CFDIDetailException;
use Nietzscheson\Admovil\Exception\CFDIException;
use Nietzscheson\Admovil\Fixture\Factory\Model\CFDI\CredentialFactory;
use Nietzscheson\Admovil\Fixture\Factory\Model\CFDIDetailFactory;
use Nietzscheson\Admovil\Fixture\Factory\Model\CFDIFactory;
use PhpSpec\ObjectBehavior;

class CFDICancelSpec extends ObjectBehavior
{
    function its_should_return_a_cfdi_cancel_interface(): void
    {
        $this->shouldHaveType(CFDICancelInterface::class);
    }

    function its_should_execute_a_cfdi_cancel(): void
    {
        $cfdi = new CFDI();

        $credential = CredentialFactory::create();

        try{
            $cfdiResult = $cfdi->execute(CFDIFactory::create());
        }catch(CFDIException $e){
            echo $e->getMessage();
        }

        $cfdiDetail = new CFDIDetail();

        $items = new Items();

        $items->addItem(CFDIDetailFactory::create());

        try{
            $cfdiDetail->execute($items, $cfdiResult);
        }catch (CFDIDetailException $e){
            echo $e->getMessage();
            exit();
        }

        $cfdiCheckin = new CFDICheckIn();

        try{
            $cfdiCheckin->execute($cfdiResult, $credential);
        }catch (CFDICheckinException $e){
            echo $e->getMessage();
            exit();
        }

        $this->execute($credential, $cfdiResult)->shouldBeEqualTo(null);
    }
}