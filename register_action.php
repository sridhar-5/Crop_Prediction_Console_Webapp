
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database_name = "crop_prediction_based_on_soil_nutrient_estimation";

//starting a new connection
$connection = mysqli_connect($servername,$username,$password,$database_name);

// checking the connection
if($connection->connect_error){
    echo "OOPS!Connection error please try again later".$connection->connect_error;
}
//setting the variables required for connection


// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

// Processing form data when form is submitted
    // Validate username
    if(empty(trim($_POST["User"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT username FROM credentials WHERE username = ?";

        if($stmt = mysqli_prepare($connection,$sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $_POST["User"]);

            // Set parameters
            $param_username = trim($_POST["User"]);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) > 0){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["User"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate password
    if(empty(trim($_POST["Createpassword"]))){
        $password_err = "Please enter a password.";
    } elseif(strlen(trim($_POST["Createpassword"])) < 8){
        $password_err = "Password must have atleast 8 characters.";
    } else{
        $password = trim($_POST["Createpassword"]);
    }

    // Validate confirm password
    if(empty(trim($_POST["ConfirmPassword"]))){
        $confirm_password_err = "Please confirm password.";
    } else{
        $confirm_password = trim($_POST["ConfirmPassword"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){

        // Prepare an insert statement
        $sql = "INSERT INTO credentials (username, password) VALUES (?, ?)";

        if($stmt = mysqli_prepare($connection, $sql)){

            // Set parameters
            $param_username = $username;
            $param_password = $password; // Creates a password hash

            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("Location:Main.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($connection);

?>