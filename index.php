<?php // Do not put any HTML above this line

require_once "session_checker.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once "bootstrap.php"; ?>
    <?php include 'navbar.php';?>
    <title>Welcome</title>
    <link type="text/css" rel="stylesheet" href="rules.css">
    <meta charset="UTF-8">
</head>
<body>
<div class="container-fluid" style="margin-left: 30px">
    <h1>Welcome</h1>
    <h4><b>You are logged in.<br>
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
</body>