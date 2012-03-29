<?php
require_once('realtime-notifications/examples/php/lib/squeeks-Pusher-PHP/lib/Pusher.php');

$app_key = '7625411e5974417ad5ca';
$app_secret = '8b74d3b89170e098f6d0';
$app_id = '17448';

$pusher = new Pusher($app_key, $app_secret, $app_id);
$data = array('message' => microtime());
$pusher->trigger('play_ey_ey', 'play', $data);
?>