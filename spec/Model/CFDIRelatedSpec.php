<?php

namespace spec\Nietzscheson\Admovil\CFDI\CFDIRelatedData;

use Nietzscheson\Admovil\Model\CFDIRelatedInterface;
use Nietzscheson\Admovil\Model\CFDIRelated\RelatedTypeInterface;
use PhpSpec\ObjectBehavior;

class CFDIRelatedSpec extends ObjectBehavior
{
    function it_is_should_implements_a_related_interface()
    {
        $this->shouldHaveType(CFDIRelatedInterface::class);
    }

    function its_should_return_a_relation_type(): void
    {
        $this->setRelationType($relationType = RelatedTypeInterface::CFDI_BY_ADVANCE_PAYMENT);
        $this->getRelationType()->shouldReturn($relationType);
    }

    function its_should_return_a_uuid(): void
    {
        $this->setUuid($uuid = "AA0AC26C-4050-0D75-0558-9A574799562F");
        $this->getUuid()->shouldReturn($uuid);
    }
}
