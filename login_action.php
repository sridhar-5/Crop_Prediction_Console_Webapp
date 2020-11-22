<?php
/**
 *Created with PHP STORM
 * Created by @Sridhar
 * Created on 19st November 2020
 * Time : 11:00PM
 **/
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: complete_profile.php");
    exit;
}
//creating a connection
$connection = new mysqli("localhost","root","root","crop_prediction_based_on_soil_nutrient_estimation");

// prevent my sql injection removing all the - in the username and password string
$username = stripcslashes($_POST["username"]);
$password = stripcslashes($_POST["password"]);
$username = mysqli_escape_string($connection,$username);
$password = mysqli_escape_string($connection,$password);

//quering the database for the user
$result = mysqli_query($connection,"select * from credentials where username = '$username' and password = '$password'") or die("Failed to query the database".mysqli_error());
$row =mysqli_fetch_array($result);
if($row['username'] == $username && $row['password'] == $password){
    session_start();
    $_SESSION["loggedin"] = true;
    $_SESSION["username"] = $username;
    header("Location:complete_profile.php");
}
else{
    echo "<script>window.alert('Login Failed!! Username or password entered is incorrect')</script>";
    $_SESSION["loggedin"] = false;
    exit;
}
mysqli_close($connection);
?>