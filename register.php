<?php
require('config.php');
// If form submitted, insert values into the database.
if (isset($_POST['submit']) && $_POST['submit']== 'Register') {
    if (!isset($_POST['password'])) {
        echo "<div class='form'> <h3>Password is required.</h3></div>";
    } elseif (strlen($_POST['password']) < 6) {
        echo "<div class='form'> <h3>Password must contain at least 6 characters.</h3></div>";
    } else {
        if (isset($_POST['username'])) {
            // removes backslashes
            $username = $_POST['username'];
            //escapes special characters in a string
            $first_name = $_POST['firstname'];
            $last_name = $_POST['lastname'];
            $password = $_POST['password'];
            $query = "INSERT into `users` (first_name, last_name, username, password) VALUES ('$first_name','$last_name','$username', '" . md5($password) . "')";
            $result = $conn->query($query);
            if ($result) {
                echo "<div class='form'> <h3>You are registered successfully.</h3> <br/>Click here to <a href='login.php'>Login</a></div>";
            } else {
                echo "<div class='form'>" . $conn->error . "</div>";
            }
        } else {
            echo "<div class='form'> <h3>Username is required.</h3></div>";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registration</title>
</head>
<body>
    <div class="form">
        <h1>Registration</h1>
        <form name="registration" action="" method="post">
            <input type="text" name="username" placeholder="Username" required/>
            <input type="text" name="firstname" placeholder="First Name"/>
            <input type="text" name="lastname" placeholder="Last Name"/>
            <input type="password" name="password" placeholder="Password" required/>
            <input type="submit" name="submit" value="Register"/>
        </form>
        <p>Already have an account? <a href='login.php'>Login Here</a></p>
    </div>
</body>
</html>
