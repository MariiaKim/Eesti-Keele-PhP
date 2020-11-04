<?php


session_start();
include_once 'inc/database.php';
require 'model/modelAnswer.php';
require 'model/modelCategory.php';
require 'model/modelExercise.php';
require 'model/register.php';

//require 'model/register.php';

include_once 'view/viewcategory.php';
include_once 'view/viewoneexercise.php';

include_once 'controller/controller.php';
include_once 'route/routing.php';

echo $response;


?>