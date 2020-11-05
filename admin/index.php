<?php
// Index admin
session_start();
require_once '../inc/database.php';
include_once ('modelAdmin/modelAdmin.php');

include_once ('controllerAdmin/controllerAdmin.php');

include ('routingAdmin/routingAdmin.php');

echo $response;