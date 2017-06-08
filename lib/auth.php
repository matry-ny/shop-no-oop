<?php

function isAuthorized()
{
    if (!isset($_SESSION['user']) || empty($_SESSION['user'])) {
        return false;
    }

    $user = $_SESSION['user'];
    if (!isset($_COOKIE['auth_hash']) || $user['auth_hash'] !== $_COOKIE['auth_hash']) {
        return false;
    }

    return true;
}

function isAdmin()
{
    return isAuthorized() && $_SESSION['user']['role'] == 'admin';
}