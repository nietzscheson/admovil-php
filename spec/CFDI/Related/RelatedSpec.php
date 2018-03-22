<?php

namespace spec\Nietzscheson\Admovil\CFDI\Related;

use Nietzscheson\Admovil\CFDI\Related\RelatedInterface;
use Nietzscheson\Admovil\CFDI\Related\RelatedTypeInterface;
use PhpSpec\ObjectBehavior;

class RelatedSpec extends ObjectBehavior
{
    function it_is_should_implements_a_related_interface()
    {
        $this->shouldHaveType(RelatedInterface::class);
    }

    function its_should_return_a_relation_type(): void
    {
        $this->setRelationType($relationType = RelatedTypeInterface::CFDI_BY_ADVANCE_PAYMENT);
        $this->getRelationType()->shouldReturn($relationType);
    }

    function its_should_return_a_voucher(): void
    {
        $this->setVoucher($voucher = 121412552);
        $this->getVoucher()->shouldReturn($voucher);
    }

    function its_should_return_a_uuid(): void
    {
        $this->setUuid($uuid = "AA0AC26C-4050-0D75-0558-9A574799562F");
        $this->getUuid()->shouldReturn($uuid);
    }
}
