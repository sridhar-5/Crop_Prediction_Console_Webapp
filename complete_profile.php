<?php

// Initialize the session
session_start();
// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location:Main.php");
    exit;
}
//check if the user has profile updated or not if yes redirect him to prediction page

/**
 *Created with PHP STORM
 * Created by @Sridhar
 * Created on 19st November 2020
 * Time : 11:00PM
 **/

if($_SERVER["REQUEST_METHOD"] == "POST"){

    //creating a connection
    $connection = new mysqli("localhost","root","root","crop_prediction_based_on_soil_nutrient_estimation");
    //checking if we are connected to the database or not
    if($connection->connect_error){
        echo "OOPS!Connection error please try again later".$connection->connect_error;
    }
    //if this step is passed then connection is successfully established

    $state_id = $_POST["State-id"];
    $state_name = $_POST["State-name"];
    $no_of_districts = rand(10,150);
    $district_id = $_POST["District-id"];
    $district_name = $_POST["District-Name"];
    $no_of_mandals = rand(10,150);
    $mandal_id = $_POST["Mandal-id"];
    $mandal_name = $_POST["Mandal-Name"];
    $no_of_farming_areas = rand(10,150);
    $area_id = $_POST["Area-id"];
    $area_name = $_POST["Area-Name"];
    $helpline = rand(158479,175354);

    if($state_id === '' || $state_name === '' || $district_id === '' || $district_name === '' || $mandal_id === '' || $mandal_name === '' || $area_id === '' || $area_name === ''){
        echo "<script>window.alert('please fill everything to proceed further')</script>";
    }
    else{
        //insertion into the table actually starts
        $sql ="INSERT INTO State values ($state_id,'$state_name',$no_of_districts)";

            mysqli_query($connection,$sql) or die("Failed to query the database".mysqli_error($connection));

        //preparing the other statement
        $sql = "INSERT INTO District values ($district_id,'$district_name',$no_of_mandals,$state_id)";

        mysqli_query($connection,$sql) or die("Failed to query the database".mysqli_error($connection));

        //preparing the other statement
        $representative = 'ravi';
        $sql = "INSERT INTO Mandal values ($mandal_id,$district_id,'$mandal_name',$no_of_farming_areas,'$representative')";

        mysqli_query($connection,$sql) or die("Failed to query the database".mysqli_error($connection));

        //preparing the other statement
        $sql = "INSERT INTO Area values ($area_id,'$area_name',$helpline,$mandal_id)";
        //preparing the statement
        mysqli_query($connection,$sql) or die("Failed to query the database".mysqli_error($connection));

        //redirect then
        header("Location:prediction.php");
        exit;
    }
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
    <h4>Prediction Progress Bar:</h4>
    <div class="progress">
        <div class="progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:60% ; text-align: center" >60%</div>
    </div>
    <form class="form-horizontal" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <br>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">State-id:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="State-id" placeholder="Enter StateID" name="State-id">
            </div>
        </div>
        <br>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">State-name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="State-name" placeholder="Enter StateName" name="State-name">
            </div>
        </div>
        <br>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">District-id:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="District-id" placeholder="Enter DistrictID" name="District-id">
            </div>
        </div>
        <br>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">District-Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="District-Name" placeholder="Enter DistrictName" name="District-Name">
            </div>
        </div>
        <br>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">  Mandal-id:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Mandal-id" placeholder="Enter Mandal-id" name="Mandal-id">
            </div>
        </div>
        <br>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Mandal-Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Mandal-Name" placeholder="Enter MandalName" name="Mandal-Name">
            </div>
        </div>
        <br>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Area-id:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Area-id" placeholder="Enter AreaID" name="Area-id">
            </div>
        </div>
        <br>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Area-Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Area-Name" placeholder="Enter AreaName" name="Area-Name">
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