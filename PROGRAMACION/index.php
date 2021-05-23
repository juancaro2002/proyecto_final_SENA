<?php



require_once('core/core.php');

$c=isset($_REQUEST['c'])  ? $_REQUEST['c'] : 'all';

$m=isset($_REQUEST['m'])  ? $_REQUEST['m'] : 'index';

$c=$c.'Controller';
require_once('controllers/'.$c.'.php');


$objeto= new $c();
$objeto->$m();



?>


