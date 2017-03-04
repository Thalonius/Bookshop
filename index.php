<?php

require_once ('inc/bootstrap.inc.php');

$default_view = 'welcome';
$view = $default_view;
//$view = $_REQUEST['view'] ? $_REQUEST['view'] : $default_view;
//$view = $_REQUEST['view'] ?? 'welcome';   //similar, but doesn't show welcome when parameter view = ''

print $view;

if (isset($_REQUEST['view']) &&
    file_exists(__DIR__ . '/views/' . $_REQUEST['view'] . '.php')
) {
    $view = $_REQUEST['view'];
}

require_once ('views/' . $view . '.php');