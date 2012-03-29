<?php

$offset_in_minutes = $_REQUEST['offset'];

echo(microtime(true) - $offset_in_minutes * 60);
?>
