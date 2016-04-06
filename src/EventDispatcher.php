<?php declare(strict_types = 1);

namespace JDR\EventRecorder;

interface EventDispatcher
{
    /**
     * Dispatch an event
     *
     * @param object $event
     */
    public function dispatch($event);
}
