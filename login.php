<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon Login</title>
    <link rel = "stylesheet" href="css/login.css"/>
    <style>
        
    </style>
</head>
<body>
    
    <div class="login-page">
        <div class="login-container">
            <div class="amazon-logo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg" alt="Amazon Logo">
            </div> 
    <fieldset style ="border-radius:5px; border-color:#f5f5f2;">
        <h1>Sign-In</h1>
        <form action="#" method="post">
            <label for="email">Email or mobile phone number</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Sign-In" name = "login">
        </form>
        <div class="create-account">
            <p>New to Amazon? <a href="register.php">Create your Amazon account</a></p>
        </div>
    </div>
</fieldset>
    </div>
   

</body>
</html>



<?php
include("config.php");
if (isset($_POST['login'])) 
{
    $username = $_POST['email'];
    $pwd = $_POST['password'];

    $query = "SELECT * FROM users WHERE contact = '$username' && password = '$pwd'";

    $data = mysqli_query($conn,$query);

    $total = mysqli_num_rows($data);

	if($total == 1)
	{
		$_SESSION['user_name']  = $username;
    
        // Extract the name part from the email before the '@' symbol
        $name = explode('@', $username)[0];
        $_SESSION['user_name'] = $name; // Store the name part in session

        
		header('location:index.php');
	}
	else
	{
		echo "login details incorrect";
	}
    }
?>
