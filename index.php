<?php
   $url = 'http://PhantomJScloud.com/api/browser/v2/a-demo-key-with-low-quota-per-ip-address/';
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
