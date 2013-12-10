<?php
/*
| Require our core settings of framework
*/
require("". dirname(dirname(__FILE__)) ."/application/includes/coreSettings.php");

/*
Load our Class and Method depends on GET value. This is our autoloader
*/
$class = (empty($_GET['class']) ? 'index' : Functions::Get('class')); /*Load index class if no GET variable is applied*/
$method = (empty($_GET['method']) ? 'index' : Functions::Get('method')); /*Load index class if no GET variable is applied*/

$load = new Application($class, $method);