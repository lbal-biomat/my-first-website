<?php

require_once "session_checker.php";

$datafile = "files/dogsfile.json";

if (!file_exists($datafile)) {
    file_put_contents($datafile, '');
}


if ( isset($_GET["name"]) && $_GET["name"] != "") {
    $jsondata = file_get_contents($datafile);
    $dogs = json_decode($jsondata, true);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once "bootstrap.php"; ?>

    <?php include 'navbar.php';?>
    <title>Retrieve dog information</title>
    <link type="text/css" rel="stylesheet" href="rules.css">
    <meta charset="UTF-8">
</head>
<body>
<br>

<div class="container-fluid" style="margin-left: 30px">
<form >
    <br>
    <label for="name" >Enter the name of the dog to search:<br>
            <input class="form-control" type="text" name="name" size="30" value=""/>
    </label>
    <div class="form-check">
        <input type="submit" class="btn btn-light" value="Find"/>
    </div>
    <br>
    <br>
</form>
<div style="width:760px;overflow:auto">

<?php

    if ( isset($_GET["name"]) && $_GET["name"] != "") {
        echo '<pre>';
        if (isset($dogs[$_GET["name"]])) {
            foreach ($dogs[$_GET["name"]] as $key => $value) {
                echo (htmlspecialchars("$key: $value\n"));
            }
        }
        else {
            echo "There isn't any dog by that name.";
        }
        echo '</pre>';
    }
?>
</div>
</div>
</body>
