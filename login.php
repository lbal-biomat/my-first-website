<?php // No HTML above this line

require_once "session_starter.php";


// Check to see if we have some POST data, if we do process it
if ( isset($_POST['who']) && isset($_POST['pass']) ) {
    if ( strlen($_POST['who']) < 1 || strlen($_POST['pass']) < 1 ) {
        $failure = "User name and password are required";
    } else if (!isset($users[$_POST['who']])) {
        $failure = "User name not in the system";
    }
    else {
        $user_pw = $users[$_POST['who']]["ps"];
        $salt = $users[$_POST['who']]['salt'];
        $check = hash('sha512', $salt.$_POST['pass']);
        if ( $check == $user_pw ) {
            $_SESSION[session_id()] = 1;
            header("Location: index.php");
            return;
        } else {
            $failure = "Incorrect password";
        }
    }
}

if ( isset($failure) && $failure !== false ) {
    $_SESSION["failure"] = $failure;
    header("Location: login.php");
    return;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once "bootstrap.php"; ?>
    <?php include 'navbar.php';?>
    <title>Log in</title>
    <link type="text/css" rel="stylesheet" href="rules.css">
    <meta charset="UTF-8">
</head>
<body>
<div class="container-fluid" style=" margin-left: 30px">
    <br>
    <h1>Please Log In</h1>
    <br>

    <?php
    if (isset($_SESSION["failure"]) ) {
        echo('<p style="color: red;">'.htmlentities($_SESSION["failure"])."</p>\n");
        unset($_SESSION["failure"]);
    }
    ?>

    <form method="POST">
        <div >
            <label for="nam">Username
                <input class="form-control" type="text" name="who" size="40" id="nam" required><br/>
            </label>
        </div>

        <div>
            <label for="id_1723" style="margin-right: 7px">Password
                <input class="form-control" type="password" name="pass" size="40" id="id_1723" required><br/>
            </label>
        </div>
        <p>
            <b>Can't remember your password?<a href="recover_pw.php"> Click here</a>.
                Don't have an account yet?<a href="sign_up.php"> Sign up here</a>.</b>
        </p>
        <div class="text-center" style="width: 420px">

            <input type="submit"  class="btn btn-light"  value="Log In">
        </div>

    </form>
</div>
</body>