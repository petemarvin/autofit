<?php
echo 2;
$url = 'http://PhantomJScloud.com/api/browser/v2/ak-4esrk-11g01-drxkg-jfxvx-xbhc6/';
$payload = file_get_contents ( 'request.json' );
$options = array(
    'http' => array(
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'POST',
        'content' => $payload
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ }
var_dump($result);
?>
