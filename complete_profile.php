<?php

// Initialize the session
session_start();
// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location:Main.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<!--
/**
* Created with PHP STORM
* Created by @Sridhar
* Created on 19st November 2020
* Time : 11:00PM
**/
-->
<head>
    <title>Update your profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron" style="background-color: #3be8b0; color: #0b0b0b">
    <center><h1>Update your profile</h1></center>
    <center><h3><b>Welcome <b> <?php echo $_SESSION["username"];?> </b> ,update your profile to start your crop prediction.</h3></center>
    <form action = logout_action.php method="post">
    <button  style="font-family: 'Franklin Gothic Medium';color: #0b0b0b; background-color: red;float:right;margin-right:120px;margin-top:-80px;border-radius:4px">Log Out</button>
    </form>
</div>

<div class="container">
    <form class="form-horizontal" action = "">
        <br>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">State-id:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="State-id" placeholder="Enter StateID" name="email">
            </div>
        </div>
        <br>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">State-name:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="State-name" placeholder="Enter StateName" name="State-name">
            </div>
        </div>
        <br>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">District-id:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="District-id" placeholder="Enter DistrictID" name="District-id">
            </div>
        </div>
        <br>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">District-Name:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="District-Name" placeholder="Enter DistrictName" name="District-Name">
            </div>
        </div>
        <br>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Area-id:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="Area-id" placeholder="Enter AreaID" name="email">
            </div>
        </div>
        <br>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Area-Name:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="Area-Name" placeholder="Enter AreaName" name="email">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label><input type="checkbox" name="remember"> Agree to all the Terms and Conditions</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default" style="background-color:#3be8b0;color: #0b0b0b">Submit</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>