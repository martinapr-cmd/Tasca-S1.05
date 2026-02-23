<?php

require_once 'classes/Notifier.php';
require_once 'classes/SMSNotification.php';
require_once 'classes/EmailNotification.php';
require_once 'classes/PostalNotification.php';

$notifier = new Notifier(new SMSNotification());
$notifier->notify("This is an SMS notification! :-)");

$notifier = new Notifier(new EmailNotification());
$notifier->notify("This is an Email notification! :-P");

$notifier = new Notifier(new PostalNotification());
$notifier->notify("This is a Postal notification! :-D");
