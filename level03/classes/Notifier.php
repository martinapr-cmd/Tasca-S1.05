<?php

class Notifier
{
    private Notification $notification;

    public function __construct(Notification $notification)
    {
        $this->notification = $notification;
    }

    public function notify(string $message): void
    {
        $this->notification->send($message);
    }
}
