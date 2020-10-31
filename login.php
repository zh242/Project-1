<?php
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

$emailErr = $passErr = "";

if (empty($email)) {
    $emailErr = "An email is required";
}

if (empty($password)) {
    $passErr = "A password is required";
}

if (strlen($password) <= 8) {
    $passErr = "Password is too short";
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
            <li class="navItem"><a href="login.html">Login</a></li>
            <li class="navItem"><a href="registration.html">Register</a></li>
            <li class="navItem"><a href="question.html">Ask a Question</a></li>
        </ul>
    </nav>
    <div id="loginForm">
        <h2>Login</h2>

        <form action="login.php" method="POST">
            <label>Email address: </label>
            <input type="text" name="email"><br><br>
            <label>Password: </label>
            <input type="password" name="password"><br><br>
            <input type="submit">
        </form>

    </div>


</body>


</html>