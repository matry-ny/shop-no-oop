<?php

session_start();

define('BASE_PATH', dirname(__DIR__));

require_once BASE_PATH . '/init.php';

initShop($_SERVER['REQUEST_URI']);
