<?php
$json = json_encode($pl);

$ts = date('Y-m-d-H.i.s');
file_put_contents('dump/'.$ts.'.json',$json);

?>