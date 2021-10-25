<?php

declare(strict_types=1);

namespace spec\Common\Command;

use Common\Command\CommandResponse;
use Common\Command\CommandResponseInterface;
use PhpSpec\ObjectBehavior;

class CommandResponseSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(CommandResponse::class);
        $this->shouldImplement(CommandResponseInterface::class);
    }

    public function it_returns_a_response_with_a_error()
    {
        $this->beConstructedThrough('withErrors', [
            [
                'error1',
                'error2'
            ]
        ]);

        $this->getStatus()->shouldReturn('not_ok');
        $this->getErrors()->shouldReturn([
            'error1',
            'error2',
        ]);
        $this->getValue()->shouldBeNull();
    }

    public function it_returns_a_valid_response()
    {
        $this->beConstructedThrough('withValue', [
            'value'
        ]);

        $this->getStatus()->shouldReturn('ok');
        $this->getValue()->shouldReturn('value');
        $this->getErrors()->shouldHaveCount(0);
    }
}
