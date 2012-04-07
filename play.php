<?php
require_once('realtime-notifications/examples/php/lib/squeeks-Pusher-PHP/lib/Pusher.php');

$app_key = 'df1ffbdf6332e86c4b40';
$app_secret = '7a516170d85d2be0809c';
$app_id = '18059';

$pusher = new Pusher($app_key, $app_secret, $app_id);

$data = array('message' => microtime(true));

$pusher->trigger('play_ey_ey', 'play', $data);
?>