<?php declare(strict_types = 1);

namespace JDR\EventRecorder;

interface ContainsRecordedEvents
{
    /**
     * Release and clear recorded events
     *
     * @return array
     */
    public function releaseEvents(): array;

    /**
     * Erase recorded events
     *
     * @return self
     */
    public function eraseEvents();
}
