<?php declare(strict_types = 1);

namespace JDR\EventRecorder;

class EventRecorder implements RecordsEvents
{
    /**
     * @var array
     */
    private $recordedEvents = [];

    /**
     * Record an event
     *
     * @param mixed $event
     */
    public function record($event)
    {
        $this->recordedEvents[] = $event;
    }

    /**
     * Release and clear recorded events
     *
     * @return array
     */
    public function releaseEvents(): array
    {
        $events = $this->recordedEvents;
        $this->recordedEvents = [];

        return $events;
    }

    /**
     * Erase recorded events
     *
     * @return self
     */
    public function eraseEvents(): self
    {
        $this->recordedEvents = [];

        return $this;
    }
}
