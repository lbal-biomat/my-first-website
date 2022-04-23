<?php
//TODO: Make dog a class
require_once "session_checker.php";

$datafile = "files/dogsfile.json";

if (!file_exists($datafile)) {
    file_put_contents($datafile, '');
}

$jsondata = file_get_contents($datafile);
$dogs = json_decode($jsondata, true);

if ( isset($_POST["name"]) && $_POST["name"] != "") {
    $dogs[$_POST["name"]] = array("Name" => $_POST["name"], "Breed" => $_POST["breed"], "Colour" =>  $_POST["colour"],
        "Date of birth" => $_POST["dob"], "Sex" => $_POST["sex"], "Description" => $_POST["description"],
        "Neutered" =>$_POST["neutered"], "Chipped" => $_POST["chip"], "Last vaccination" => $_POST["vax"],
        "Owner" => $_POST["owner"], "Owner's email" => $_POST["email"], "Owner's phone" => $_POST["phone"],
        "Comments" => $_POST["comments"]);

    file_put_contents("$datafile", json_encode($dogs), LOCK_EX);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once "bootstrap.php"; ?>
    <?php include 'navbar.php';?>
    <title>Dog Registration Form</title>
    <link type="text/css" rel="stylesheet" href="rules.css">
    <meta charset="UTF-8">
</head>
<body>
<div class="container-fluid" style="margin-left: 30px">

    <h1>Dog Registration Form</h1>
    <br>
    <?php
        $oldData = !empty($_POST) ? $_POST : '';
    ?>
    <form method="post">

        <label for="name" style="margin-right: 20px">Name: <input class="form-control" type="text" name="name" size="23" value=""/></label>
        <label for="breed" style="margin-right: 20px">Breed: <input class="form-control" type="text" name="breed" size="22" value=""/></label>
        <label for="colour">Colour: <input class="form-control" type="text" name="colour" size="12" value=""/></label><br>
        <label for="dob" style="margin-right: 80px">Date of Birth: <input class="form-control" type="date" name="dob" value="" /></label>
        <label for="sex">Sex:
            <label><input class="form-check-input" type="radio" name="sex" value="Female"/>Female</label>
            <label><input class="form-check-input" type="radio" name="sex" value="Male"/>Male</label>
        </label>

        <div class="form-group">
            <label for="description">Description:<br>
                <textarea class="form-control" style="min-width: 300%" rows="6"  name="description"></textarea>
            </label>
        </div>
        <div class="form-check">
            <label for="neutered" style=" margin-right: 77px" >Neutered:
                <label><input class="form-check-input" type="radio" name="neutered" value="Yes"/>Yes</label>
                <label><input class="form-check-input" type="radio" name="neutered" value="No"/>No</label>
            </label>

            <label  for="chip" style=" margin-right: 77px" >Chipped:
                <label><input class="form-check-input" type="radio" name="chip" value="Yes"/>Yes</label>
                <label><input class="form-check-input" type="radio" name="chip" value="No"/>No</label>
            </label>

            <label  for="vax" >Last vaccination: <input type="date" name="vax" value=""/></label>

        </div>

        <div class="form-check" style="margin-bottom: 20px">
            <label for="owner" style="margin-right: 22px">Owner's name: <input class="form-control" type="text" name="owner" size="18" value=""/></label>
            <label for="phone" style="margin-right: 22px">Owner's phone: <input class="form-control" type="text" name="phone" size="14" value=""/></label>
            <label for="email">Owner's email: <input class="form-control" type="email" name="email" size="25" value=""/> </label>
        </div>

        <div style="display: inline-flex">
            <label for="comments" style="float:left">Health comments:<br>
                <textarea class="form-control" style="width: 720px" rows="6" name="comments"></textarea>
            </label>
            <label style="align-self: end">
                <input type="submit" class="btn btn-light" value="Submit"/>
            </label>
            <label style="align-self: end">
                <input type="button" class="btn btn-light" onclick="location.href='registration.php'; return false" value="Clean">
            </label>
        </div>

        <br>
    </form>
</div>

</body>