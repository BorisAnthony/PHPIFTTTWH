<?php
$json = json_encode($pl,JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);

$ts = date('Y-m-d-H.i.s');
file_put_contents(__DIR__ . '/dump/' . $ts . '.json', $json);

?>