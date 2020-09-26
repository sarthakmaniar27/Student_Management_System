
<?php
// Include config file
require_once "database_connectivity.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM admin WHERE username = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO admin (username, password) VALUES (?, ?)";
         
        if(($stmt = mysqli_prepare($conn, $sql)) && ($stmt1 = mysqli_prepare($conn1, $sql)) && ($stmt2 = mysqli_prepare($conn2, $sql)))
        {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            mysqli_stmt_bind_param($stmt1, "ss", $param_username, $param_password);
            mysqli_stmt_bind_param($stmt2, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            //$param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_password = $password;
            // Attempt to execute the prepared statement
            mysqli_stmt_execute($stmt1);
            mysqli_stmt_execute($stmt2);
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later!!!!";
            }

            // Close statement
            mysqli_stmt_close($stmt);
            mysqli_stmt_close($stmt1);
            mysqli_stmt_close($stmt2);
        }
    }
    
    // Close connection
    mysqli_close($conn);
    mysqli_close($conn1);
    mysqli_close($conn2);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title> Admin Login</title>
    <style>
        h1{
            text-align: center; 
            font-size: 50px;
            font-weight: bold;
            font-family: serif;
            color: yellow;
            text-shadow: 8px 15px 15px black;
        }
        body{
            background-color: white;
            background-image:url('images/bgimg.jpg');
            background-size: cover;
        }
        

                .input-container {
                  display: -ms-flexbox; 
                  display: flex;
                  width: 100%;
                  margin-bottom: 15px;
                }

                .icon {
                  padding: 10px;
                  background: #080d36;
                  color: white;
                  min-width: 50px;
                  text-align: center;
                }

                .input-field {
                  width: 100%;
                  padding: 10px;
                  outline: none;
                }

                .input-field:focus {
                  border: 2px solid #0033cc;
                }

                .btn  {
                  background-color: #080d36;
                  color: white;
                  padding: 15px 20px;
                  border: none;
                  cursor: pointer;
                  width: 100%;
                  opacity: 0.9;
                }

                .btn:hover {
                  opacity: 1;
                }

                a:link, a:visited {
                        background-color: #0033cc;
                        color: white;
                        padding: 15px 25px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                    }

                      a:hover, a:active {
                        background-color: blue;
                    }
    </style>
</head>
<body>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" style="max-width:500px;margin:auto;">
            <br><br><br>
            <h1>Admin Registration</h1><br><br>  
            <div class="input-container <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <i class="fa fa-user icon"></i>
                <input class="input-field" type="text" value="<?php echo $username; ?>" placeholder="Enter username"  name="username" required><br><br>
            </div> 
            <div class="input-container <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <i class="fa fa-key icon"></i>
              <input class="input-field" type="password" value="<?php echo $password; ?>" placeholder="Enter password"  name="password" required><br><br>
              <span class="help-block"><?php echo $password_err; ?></span>        
            </div>
            <div class="input-container <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <i class="fa fa-key icon"></i>
              <input class="input-field" type="password" value="<?php echo $confirm_password; ?>" placeholder="Confirm password"  name="confirm_password" required><br><br>
              <span class="help-block"><?php echo $confirm_password_err; ?></span>      
            </div>
            <button type="submit" name="register" class="btn"> Register </button><br><br>
            <button type="button" name="login" class="btn" onClick="loginpage()"> Already have an account? Login here </button>
        </form>
<script>
    function loginpage(){
        window.location="login.php";
    }
</script>
</body>
</html>