<?php
require_once 'config.php';
require_once 'vendor/autoload.php';
require_once 'connection.php';

$router = new core\router\Router();

require_once 'routes.php';
