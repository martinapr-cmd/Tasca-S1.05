<?php

require_once 'Notification.php';

class PostalNotification implements Notification
{
    public function send(string $message): void
    {
        echo "Sending postal mail: $message<br>";
    }
}
