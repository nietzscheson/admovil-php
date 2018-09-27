<?php

/**
 * @package spec\Nietzscheson\Model
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace spec\Nietzscheson\Admovil\Model;

use Nietzscheson\Admovil\Model\CFDIPaymentDetail;
use Nietzscheson\Admovil\Model\CFDIPaymentDetailInterface;
use PhpSpec\ObjectBehavior;

class CFDIPaymentDetailSpec extends ObjectBehavior
{
    function it_is_initializable(): void
    {
        $this->shouldHaveType(CFDIPaymentDetail::class);
    }

    function it_is_should_implements_a_cfdi_payment_detail_interface(): void
    {
        $this->shouldHaveType(CFDIPaymentDetailInterface::class);
    }

    function it_is_should_return_a_currency(): void
    {
        $this->setCurrency($currency = (string) 'The Currency');
        $this->getCurrency()->shouldReturn($currency);
    }

    function it_is_should_return_a_exchange_rate(): void
    {
        $this->setExchangeRate($exchangeRate = 1.00);
        $this->getExchangeRate()->shouldReturn($exchangeRate);
    }

    function its_should_return_a_payment_id(): void
    {
        $this->setId($id = 12);
        $this->getId()->shouldReturn($id);
    }

    function its_should_return_a_voucher(): void
    {
        $this->setVoucher($voucher = '112233445566');
        $this->getVoucher()->shouldReturn($voucher);
    }

    function its_should_return_a_uuid(): void
    {
        $this->setUuid($uuid = '1122-3344-5566');
        $this->getUuid()->shouldReturn($uuid);
    }

    function its_should_return_a_serie(): void
    {
        $this->setSerie($serie = '112233445566');
        $this->getSerie()->shouldReturn($serie);
    }

    function its_should_return_a_folio(): void
    {
        $this->setFolio($folio = '214241');
        $this->getFolio()->shouldReturn($folio);
    }

    function its_should_return_a_partiality_number(): void
    {
        $this->setPartialityNumber($partialityNumber = '214241');
        $this->getPartialityNumber()->shouldReturn($partialityNumber);
    }

    function its_should_return_a_previous_balance_amount(): void
    {
        $this->setPreviousBalanceAmount($previousBalanceAmount = 1.0);
        $this->getPreviousBalanceAmount()->shouldReturn($previousBalanceAmount);
    }

    function its_should_return_a_amount_paid(): void
    {
        $this->setAmountPaid($amountPaid = 1.0);
        $this->getAmountPaid()->shouldReturn($amountPaid);
    }
}
