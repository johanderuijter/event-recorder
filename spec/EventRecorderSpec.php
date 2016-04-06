<?php

namespace spec\JDR\EventRecorder;

use JDR\EventRecorder\EventRecorder;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EventRecorderSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(EventRecorder::class);
    }

    function it_is_created_empty()
    {
        $this->releaseEvents()->shouldReturn([]);
    }

    function it_records_events()
    {
        $this->record('event');
        $this->releaseEvents()->shouldReturn(['event']);
    }

    function it_can_release_the_recorded_events_only_once()
    {
        $this->record('event');
        $this->releaseEvents()->shouldReturn(['event']);
        $this->releaseEvents()->shouldReturn([]);
    }

    function it_can_erase_the_recorded_events()
    {
        $this->record('event');
        $this->eraseEvents();
        $this->releaseEvents()->shouldReturn([]);
    }
}
