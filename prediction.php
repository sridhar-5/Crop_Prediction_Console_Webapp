<?php

/**
 *Created with PHP STORM
 * Created by @Sridhar
 * Created on 19st November 2020
 * Time : 11:00PM
 **/
//session is started and then we check if the user is logged in not
session_start();
// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location:Main.php");
    exit;
}
$servername = "localhost";
$username = "root";
$password = "root";
$database_name = "crop_prediction_based_on_soil_nutrient_estimation";

//actuall prediction starts

?>
<html>
<head>
    <title>Hey <?php echo $_SESSION["username"]?>!Welcome to the Prediction part.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<div class="jumbotron" style="background-color: #3be8b0; color: #0b0b0b">
    <center><h1>Hey Almost there! <?php echo $_SESSION["username"]; ?>  </h1></center>

    <form action = logout_action.php method="post">
        <button  style="font-family: 'Franklin Gothic Medium';color: #0b0b0b; background-color: red;float:right;margin-right:120px;margin-top:-50px;border-radius:4px">Log Out</button>
    </form>
</div>
<div class="container">
    <h4 style="color: red">Prediction Progress Bar:</h4>
    <div class="progress">
        <div class="progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:80% ; text-align: center" >80%</div>
    </div>
    <br>

    <form class="form-horizontal" action="crop_prediction.php" method="post">
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Area-id:</label>
            <div class="col-sm-10" style="float: left">
                <input type="text" class="form-control" id="State-id" placeholder="Enter AreaID" name="predict_Area-id">
            </div>
            <div class="col-sm-10" style="margin-top: 10px;float: right">
                <button type="submit" class="btn btn-default" style="background-color:#3be8b0;color: #0b0b0b">Submit</button>
            </div>
            <div>
                <h4 id="print"></h4>
            </div>
        </div>
    </form>

    <!-- suggesting the type of the irrigation in using rain dependency and crop -->
</body>

</html>
