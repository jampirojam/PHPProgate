<?php
// Import menu.php
require_once('menu.php');

// Move the declarations here
// Move the declarations below to data.php
$juice = new Menu('JUICE');
$coffee = new Menu('COFFEE');
$curry = new Menu('CURRY');
$pasta = new Menu('PASTA');

$menus = array($juice, $coffee, $curry, $pasta);
// ---------------------------------------


?>