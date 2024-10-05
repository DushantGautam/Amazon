<?php
	session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel = "stylesheet" href="css/login.css"/>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        
    </style>
</head>
<body>

    <div class="register-container">

        <div class="amazon-logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg" alt="Amazon Logo">
        </div> 

        <fieldset style ="border-radius:5px; border-color:#f5f5f2;">
        <h1>Create Account</h1>
        <form action="#" method="post">
            <!-- Name -->
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" placeholder="First and last name" required>

            <!-- Mobile or Email -->
            <label for="contact">Mobile number or email</label>

            <input type="email" id="contact" name="contact" placeholder="Enter your email or mobile phone number" required>

            <!-- Password -->
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="At least 6 characters" required>

            <!-- Confirm Password -->
            <label for="confirm-password">Re-enter password</label>
            <input type="password" id="confirm-password" name="confirm-password" placeholder="Re-enter password" required>

            <!-- Submit Button -->
            <input type="submit" value="Continue" name = "continue">
        </form>

        <!-- Already have an account -->
        <div class="already-account">
            <p>Already have an account? <a href="login.php">Sign-In</a></p>
        </div>
        </fieldset>
    </div>

</body>
</html>

<?php
// Include the database connection file
include('config.php');



// Check if the form is submitted
if (isset($_POST['continue'])) 
{

    // Get the form data
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $password =  $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    // Check if password matches the confirm password
    if ($password === $confirm_password) {
        
        // SQL query to insert data into the users table
        $sql = "INSERT INTO users (name, contact, password) VALUES ('$name', '$contact', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
		
		    $userprofile = $_SESSION['user_name'];
		    header('location:index.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    } else {
        echo "Passwords do not match!";
    }

    // Close the connection
    $conn->close();
}
?>