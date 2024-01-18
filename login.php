<?php
// Start the session
session_start();

// Include the database connection
include 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM signup WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row['password'];

        if (password_verify($password, $hashedPassword)) {
            // Store user information in session
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_email'] = $row['email'];

            // Redirect to dashboard or other page
            header("Location: index.php");
            exit();
        } else {
            echo '<script>
                alert("Invalid email or password.");
            </script>';
        }
    } else {
        echo '<script>
            alert("Invalid email or password.");
        </script>';
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login Form </title>
    <style>
        body{
            margin: 0;
            padding: 0;
            height: 100vh;
            overflow: hidden;
        }
        .center{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            background: white;
            border-radius: 12px;
        }
        .center h1{
            text-align: center;
            padding: 0 0 20px 0;
            border-bottom: 1px solid silver;
        }
        .center form{
            padding: 0 40px;
            box-sizing: border-box;
        }
        form .text-field{
            position: relative;
            border-bottom: 2px solid #adadad;
            margin: 30px 0;
        }
        .text-field input{
            width: 100%;
            padding: 0 5px;
            height: 40px;
            font-size: 16px;
            border: none;
            background: none;
            outline: none;
        }
        .text-field label{
            position: absolute;
            top: 50%;
            left: 5px;
            color: #adadad;
            transform: translateY(-50%);
            font-size: 16px;
            pointer-events: none;
            transition: .5s;
        }
        .text-field span::before{
            content: '';
            position: absolute;
            top: 40px;
            left: 0;
            width: 100%;
            height: 2px;
            background: #2691d9;
        }
        .text-field input:focus~label,
        .text-field input:focus~label{
            top: -5px;
            color: #2691d9;
        }
        .text-field input:focus~label,
        .text-field input:focus~label{
            width: 100%;
        }
        .pass{
            margin: -5px 0 20px 50x;
            color: #a6a6a6;
            cursor: pointer;
        }
        .pass:hover{
            text-decoration: underline;
        }
        input[type="submit"]{
            width: 100%;
            height: 50px;
            border: 1px solid;
            background: #2691d9;
            border-radius: 25px;
            font-size: 18px;
            color: #e9f4fb;
            font-weight: 700;
            cursor: pointer;
            outline: none;
        }
        input[type="submit"]:hover{
            border-color: #2691d9;
            transition: .5s;
        }
        .signup-link{
            margin: 30px 0;
            text-align: center;
            font-size: 16px;
            color: #2691d9;
        }
        .signup-link a{
            color: #2691d9;
            text-decoration: none;
        }
        .signup-link a:hover{
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="center">
        <h1> LOGIN </h1>
        <form Action=# method="post">
            <div class="text-field">
                <input type="email" name="email" placeholder="Email"  required>
                <label> Email </label>
            </div>

            <div class="text-field">
                <input type="password" name="password" placeholder="Password" required>
                <label> Password </label>
            </div>

            <div class="pass">
                Forget Password?
            </div>
            <input type="submit" value="Login">

            <div class="signup-link">
                Not a number?
                <a href="signup.php"> Signup </a>
            </div>
        </form>
    </div>
</body>
</html>

