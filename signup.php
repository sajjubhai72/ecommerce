<?php
// Include the database connection
include 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $firstName = $_POST['txt-name'];
    $lastName = $_POST['txt-lname'];
    $email = $_POST['txt-email'];
    $password = $_POST['txt-password'];
    $rePassword = $_POST['txt-rpassword'];

    // Check if passwords match
    if ($password !== $rePassword) {
        echo '<script>
            alert("Passwords do not match.!");
            </script>';
    } else {
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // SQL query to insert data into signup table
        $sql = "INSERT INTO signup (firstname, lastname, email, password) VALUES ('$firstName', '$lastName', '$email', '$hashedPassword')";

        if (mysqli_query($conn, $sql)) {
            echo '<script>
                alert("Registration Successful!");
                setTimeout(function() {
                window.location.href = "login.php";
            }, 1000);
            </script>';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Signup Form </title>
    <style>
            body{
                margin-top: 25px;
                background: linear-gradient(#4b525b, #375474);
            }
            .contain{
                width: 360px;
                height: 550px;
                margin: auto;
                background-color: #fff;
                border-radius: 3px;
            }
            h1{
                text-align: center;
                padding-top: 12px;
            }
            form{
                width: 300px;
                margin-left: 20px;
            }
            form label{
                display: flex;
                margin-top: 18px;
                font-size: 18px;
            }
            form input{
                width: 100%;
                padding: 6px;
                border: none;
                border: 1px solid gray;
                border-radius: 6px;
                outline: none;
            }
            input[type="submit"]{
                width: 300px;
                height: 40px;
                margin-top: 20px;
                border: none;
                background-color: #6D7B8D;
                color: white;
                font-size: 25px;
                font-weight: 700;
                cursor: pointer;
                outline: none;
            }

        </style> 
</head>
<body>
        <div class="contain">
            <h1> Sign Up </h1>
          <form action="#" method="post">
               <label> First Name </label>
               <input type="text" name="txt-name" required>

               <label> Last Name </label>
               <input type="text" name="txt-lname" required>

               <label> Email </label>
               <input type="email" name="txt-email" required>

               <label> Password </label>
               <input type="password" name="txt-password" required>

               <label> Re-Password </label>
               <input type="password" name="txt-rpassword" required>

               <input type="submit" value="Signup">

          </form>
        </div>
    </body>
</html>
