<?php
require_once('realtime-notifications/examples/php/lib/squeeks-Pusher-PHP/lib/Pusher.php');

$app_key = '3b401827ffe6d1227039';
$app_secret = '82d05a1198b87fe1350d';
$app_id = '17464';

$pusher = new Pusher($app_key, $app_secret, $app_id);
<<<<<<< HEAD
$data = array('message' => microtime());
=======
$data = array('message' => 'This is an HTML5 Realtime Push Notification!');
/* , 'time'=>microtime(true) + 1); */
>>>>>>> 80e3db17c97bd2c4f060bab0a3ff6fcc3ae8dbbf
$pusher->trigger('play_ey_ey', 'play', $data);
?>