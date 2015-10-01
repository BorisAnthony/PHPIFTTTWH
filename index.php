<?php
/* Blah */

/*  We will define a light standard that the first item in the IFTTT WebHook post be an explicit Trigger Identifier slug which must match the plugin filename.

E.g.:
{'trigger':'instagram'}
include('plugins/'.$pl['trigger'].'.php');

*/
$post = file_get_contents('php://input');
$pl = json_decode($post,true);
//print_r($pl);
$plugin_path = __DIR__ . "/plugins/".$pl['trigger'].".php";

include_once($plugin_path);

?>