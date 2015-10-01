<?php
/* Blah */

/*  We will define a light standard that the first item in the IFTTT WebHook post be an explicit Trigger Identifier slug which must match the plugin filename.

E.g.:
{'trigger':'instagram'}
include('plugins/'.$pl['trigger'].'.php');

*/

(array)$pl = json_decode($_POST['payload'],true);
$plugin_path = __DIR__ . "/plugins/".$pl['trigger'].".php";

include_once($plugin_path);

?>