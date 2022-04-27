<?php

require_once "session_checker.php";
require_once "bootstrap.php";
require_once "navbar.php";

$url = 'https://www.dogfactsapi.ducnguyen.dev/api/v1/facts/?number=1';
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
$res = json_decode(curl_exec($curl),true);
$fact =  $res["facts"] [0];
curl_close($curl);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome</title>
    <link type="text/css" rel="stylesheet" href="../css/rules.css">
    <meta charset="UTF-8">
</head>
<body>
<div class="container-fluid" style="margin-left: 30px">

    <div class="box welcome" style="background: snow; width: 30%; padding: 5px 20px 20px; margin-top: 50px">
        <h1>Welcome</h1>
        <h4><b>You are logged in as <?php 'echo <pre>'; echo $user; 'echo </pre>' ?>.<br>
        Where do you want to go from here?<b></h4>
        <form method="post">

            <label style="align-self: end">
                <input type="submit" class="btn btn-light" formaction="register_dog.php" value="Register a Dog"/>
            </label>

            <label style="align-self: end">
                <input type="submit" class="btn btn-light" formaction="search_dog.php" value="Our dogs"/>
            </label>
        </form>
    </div>

    <div class="box welcome" style="background: snow; width: 40%; padding: 5px 20px 20px; margin-top: 50px; margin-right: 100px; float: right">
        <h3>Random dog facts</h3>

        <?php
            echo '<pre style="white-space: pre-wrap; word-break: keep-all" >';
            echo $fact;
            echo '</pre>';
        ?>

    </div>

</div>
</body>