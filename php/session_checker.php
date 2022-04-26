<?php

session_start();

if ( ! isset($_SESSION[session_id()]) ||  $_SESSION[session_id()] === 0) {
    $_SESSION[session_id()] = 0;
    header('Location: login.php');
    return;
}