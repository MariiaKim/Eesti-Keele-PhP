<?php


session_start();
include_once 'inc/database.php';
require 'model/modelCategory.php';
//require 'model/news.php';

//require 'model/register.php';

//include_once 'view/news.php';
include_once 'view/category.php';

include_once 'controller/controller.php';
include_once 'route/routing.php';

echo $response;

?>

<link rel="stylesheet" type="text/css" href="style.css">