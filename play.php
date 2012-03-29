<?php
require_once('realtime-notifications/examples/php/lib/squeeks-Pusher-PHP/lib/Pusher.php');

$app_key = '3b401827ffe6d1227039';
$app_secret = '82d05a1198b87fe1350d';
$app_id = '17464';

$pusher = new Pusher($app_key, $app_secret, $app_id);

$data = array('message' => microtime(true), 'message2' => microtime(true) + 1000000);

$pusher->trigger('play_ey_ey', 'play', $data);
?>