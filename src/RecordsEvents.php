<?php declare(strict_types = 1);

namespace JDR\EventRecorder;

interface RecordsEvents extends ContainsRecordedEvents
{
    /**
     * Record an event
     *
     * @param mixed $event
     */
    public function record($event);
}
