<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once "bootstrap.php"; ?>

    <link type="text/css" rel="stylesheet" href="rules.css">
    <meta charset="UTF-8">
</head>
<body>
<nav class="navbar navbar-inverse" role="navigation" id="main_nav_bar"  >
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <li><a href="index.php" >Main</a></li>
            <li><a href="register_dog.php" >Dog registration form</a></li>
            <li><a href="search_dog.php">Our dogs</a></li>
        </ul>
        <form method="post">
        <ul class="nav navbar-nav navbar-right">
            <li> <input class="btn btn-link logout" type="submit" name="logout" id="logout" value="Log out"></li>
        </ul>
        </form>

    </div>

</nav>

</body>