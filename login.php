<?php
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

$emailErr = $passErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($email)) {
        $emailErr = "An email is required";
    } elseif (!strpos($email, "@") || !strpos($email, ".")) {
        $emailErr = "Email is not valid";
    }

    if (empty($password)) {
        $passErr = "A password is required";
    } elseif (strlen($password) < 8) {
        $passErr = "Password is too short";
    }
}

?>

<!DOCTYPE html>

<html lang="en">
    
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <nav>
        <ul>
            <li class="navItem"><a href="login.php">Login</a></li>
            <li class="navItem"><a href="registration.php">Register</a></li>
            <li class="navItem"><a href="question.php">Ask a Question</a></li>
        </ul>
    </nav>
    <div id="loginForm">
        <h2>Login</h2>

        <form action="login.php" method="POST">
            <label>Email address: </label>
            <input type="text" name="email"><br><br>
            <label>Password: </label>
            <input type="password" name="password"><br><br>
            <p style="color: red"><?php echo $emailErr; ?></p>
            <p style="color: red"><?php echo $passErr; ?></p>
            <input type="submit">
        </form>

    </div>


</body>


</html>