<?php
session_start();
/**
 *Created with PHP STORM
 * Created by @Sridhar
 * Created on 19st November 2020
 * Time : 11:00PM
 **/
$servername = "localhost";
$username = "root";
$password = "root";
$database_name = "crop_prediction_based_on_soil_nutrient_estimation";

// Create connection
$conn = new mysqli($servername, $username, $password, $database_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
}

$area_id = $_POST["predict_Area-id"];
$seed_id = 0;

//predicting the crop
$suggested_crop = "";
$sql = "select Seed_id from Area_Seed where Area_id=$area_id";

$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_row()){
        $seed_id = $row[0];
    }
}
else{
    echo "0 rows selected";
}
$sql2 = "select Seed_Name,Seed_cost from Seeds where Seed_id=$seed_id";
$seed_cost = 0;
$result2 = $conn->query($sql2);
if($result2->num_rows > 0){
    while($row = $result2->fetch_row()){
        $suggested_crop = $row[0];
        $seed_cost = $row[1];
    }
}

$sql_rain = "select Rainfall_type from Area_Rainfall where Area_id = '$area_id'";
$rainfall_type = "";
$result_rain = $conn->query($sql_rain);
if($result_rain->num_rows > 0){
    while($row = $result_rain->fetch_row()){
        $rainfall_type = $row[0];
    }
}
$sql_rain_dep = "select Rainfall_dependency from Rainfall where Rainfall_type = '$rainfall_type'";
$rain_dep = 0;
$result_rain_dep = $conn->query($sql_rain_dep);
if($result_rain_dep->num_rows > 0){
    while($row = $result_rain_dep->fetch_row()){
        $rain_dep = $row[0];
    }
}

$sql_water_dep = "select Irrigation_Name from Area_Irrigation where Area_id=$area_id";
$irrigation_name = "";
$result_irrigation = $conn->query($sql_water_dep);
if($result_irrigation->num_rows > 0){
    while($row = $result_irrigation->fetch_row()){
        $irrigation_name = $row[0];
    }
}
$sql_irri_eff = "select Irr_efficiency from Irrigation where Irrigation_Name='$irrigation_name'";
$irri_eff = 0;
$result_efficiency = $conn->query($sql_irri_eff);
if($result_efficiency->num_rows > 0){
    while($row = $result_efficiency->fetch_row()){
        $irri_eff = $row[0];
    }
}
?>
<html>
<head><title>The Prediction results</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<div class="jumbotron" style="background-color: #3be8b0; color: #0b0b0b">
    <center><h2>Hey, <?php echo $_SESSION["username"];?>! Some prediction Results for You.</h2></center>

    <form action = logout_action.php method="post">
        <button  style="font-family: 'Franklin Gothic Medium';color: #0b0b0b; background-color: red;float:right;margin-right:120px;margin-top:-50px;border-radius:4px">Log Out</button>
    </form>
</div>

<div class="container">
    <h4>Prediction Progress Bar:</h4>
    <div class="progress">
        <div class="progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:100% ; text-align: center" >100%</div>
    </div>
    <br>
    <div><?php echo "<h2 style='color: #33de39;'>The Most occurant rainfall in your area is $rainfall_type</h2>"?></div>
    <br>
    <div><?php echo "<h2 style='color: #33de39;'>You can depend on rain upto $rain_dep%</h2>"?></div>
    <br>
    <div> <?php echo "<h2 style='color: #33de39;'>The Crop suggested to your area is $suggested_crop</h2>"?> </div>
    <br>
    <div> <?php echo "<h2 style='color: #33de39;'>The Cost of the crop is $seed_cost</h2>"?> </div>
    <br>
    <div> <?php echo "<h2 style='color: #33de39;'>The Suggested Method of irrigation is $irrigation_name</h2>"?> </div>
    <br>
    <div> <?php echo "<h2 style='color: #33de39;'>The Efficiency of the Suggested Irrigation is $irri_eff%</h2>"?> </div>
    <br>
</div>
</body>
<footer style="background-color: #3be8b0; color: #0b0b0b" class="container-fluid text-center">
    <p style="margin-top: 50px;margin-bottom: 50px;color: black;font-size: xx-large"><b>End of the Crop Prediction Console,Thank you <br> <center>@SRIDHAR</center></b></p>
</footer>
</html>

