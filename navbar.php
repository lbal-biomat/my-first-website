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
            <li>
                <a href="login.php" class="btn btn-link logout" id="logout">
                    Log out
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-box-arrow-right" viewBox="0 -2 16 16">
                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                    </svg>
                </a>
            </li>

        </ul>
        </form>

    </div>

</nav>

</body>