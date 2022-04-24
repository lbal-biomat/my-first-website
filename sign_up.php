<?php // No HTML above this line

require_once "session_starter.php";
require_once "salt_generator.php";


if ( isset($_POST['who']) && isset($_POST['pass']) ) {
    if (strlen($_POST['who']) < 1 || strlen($_POST['pass']) < 1) {
        $failure = "User name and password are required"; //shouldn't need to enter here
    } else if (isset($users[$_POST['who']])) {
        $failure = "User name is not available";
    } else if (strlen($_POST['pass']) < 12) {
        $failure = "Password must be at least 12 characters in length";
    }
    else if ($_POST['pass'] !== $_POST['conf'])  {
        $failure = "Password mismatch";
    }
    else {
        $salt = random_str();
        $users[$_POST['who']] = array("salt" => $salt, "ps" => hash('sha512', $salt.$_POST['pass']));
        file_put_contents($usersfile, json_encode($users), LOCK_EX);
        header('Location: login.php');
        return;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once "bootstrap.php"; ?>
    <?php include 'navbar.php';?>
    <title>Sign up</title>
    <link type="text/css" rel="stylesheet" href="rules.css">
    <meta charset="UTF-8">
</head>

<body>
<div class="container-fluid" style=" margin-left: 30px">
    <br>
    <h1>Sign up</h1>
    <br>

    <?php
    if ( $failure !== false ) {
        echo('<p style="color: red;">'.htmlentities($failure)."</p>\n");
    }
    ?>

    <form method="POST">
        <div >
            <label for="nam">Username
                <input class="form-control" type="text" name="who" size="40" id="nam" required>
            </label>
        </div>

        <div>
            <label for="id_1723" style="margin-right: 7px">Password
                <input class="form-control" type="password" name="pass" size="40" id="id_1723" required>
                <b style="color: grey">Password must be at least 12 characters in length</b>
            </label>
        </div>
        <br>
        <div>
            <label for="id_1723" style="margin-right: 7px">Confirm Password
                <input class="form-control" type="password" name="conf" size="40" id="id_1723" required>
            </label>
        </div>


        <div class="text-center" style="width: 400px">

            <input type="submit"  class="btn btn-light"  value="Sign up">
        </div>
        <b>Back to<a href="login.php"> login page</a>.</b>

    </form>
</div>
</body>

