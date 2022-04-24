<?php // No HTML above this line

session_start();

if ( ! isset($_SESSION[session_id()]) ) {
    $_SESSION[session_id()] = 0;
}

$usersfile = "files/users.json";
if (!file_exists($usersfile)) {
    file_put_contents($usersfile, '');
}

$jsonusers = file_get_contents($usersfile);
$users = json_decode($jsonusers, true);

