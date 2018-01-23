<?php
 
require_once('./vendor/autoload.php');

use \LINE\LINEBot\HTTPClient\CurlHTTPClient;
use \LINE\LINEBot;
use \LINE\LINEBot\MessageBuilder\TextMessageBuilder;

$channel_token = '5gh0H3Lf0INkP5CzofOA333l0xLdAapG9dTE5lt9VFqyCjBB/NGK2kxdwIMOVuKAdMyoGQYQ5oz88QMJmzJ/VWO7vO1F0+aiYX5LVehrvYs9QwJi9e9Eqo5eKKQ+bPqGgGOonOgIiiTJYdUYzBqQbQdB04t89/1O/w1cDnyilFU=';
$channel_secret = '4320bea28ab21d44dcc3c164f9e464a8';

// Get message from Line API
$content = json_encode($_REQUEST);

/* Debug data */
$file = fopen("logs.txt", "w");
fwrite($file, $content);
fclose($file);

echo "OK";
