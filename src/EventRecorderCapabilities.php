<?php declare(strict_types = 1);

namespace JDR\EventRecorder;

trait EventRecorderCapabilities
{
    /**
     * @var array
     */
    private $recordedEvents = [];

    /**
     * Record an event
     *
     * @param object $event
     *
     * @return self
     */
    protected function record($event): self
    {
        $this->recordedEvents[] = $event;

        return $this;
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
