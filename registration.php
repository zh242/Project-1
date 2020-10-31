<?php
$fname = filter_input(INPUT_POST, 'fname');
$lname = filter_input(INPUT_POST, 'lname');
$bday = filter_input(INPUT_POST, 'bday');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

$emailErr = $passErr = $fnameErr = $lnameErr = $bdayErr = "";

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

    if (empty($fname)) {
        $fnameErr = "First name is empty";
    }

    if (empty($lname)) {
        $lnameErr = "Last name is empty";
    }

    if (empty($bday)) {
        $bdayErr = "Birthday is empty";
    }
}

?>

<!DOCTYPE html>

<html lang="en">
    
<head>
    <title>Register</title>
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

    <div id="registerForm">
        <h2>Register</h2>

        <form action="registration.php" method="POST">
            <label>First Name: </label>
            <input type="text" name="fname"><br><br>
            <label>Last Name: </label>
            <input type="text" name="lname"><br><br>
            <label>Birthday: </label>
            <input type="date" name="bday"><br><br>
            <label>Email address: </label>
            <input type="text" name="email"><br><br>
            <label>Password: </label>
            <input type="password" name="password"><br><br>
            <p style="color: red"><?php echo $fnameErr; ?></p>
            <p style="color: red"><?php echo $lnameErr; ?></p>
            <p style="color: red"><?php echo $bdayErr; ?></p>
            <p style="color: red"><?php echo $emailErr; ?></p>
            <p style="color: red"><?php echo $passErr; ?></p>
            <input type="submit">
        </form>

    </div>

</body>


</html>