<?php
$name = filter_input(INPUT_POST, 'name');
$question = filter_input(INPUT_POST, 'question');
$skills = filter_input(INPUT_POST, 'skills');

$nameErr = $qErr = $skillsErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($skills) || !strpos($skills, ",")) {
        $skillsErr = "At least two skills are required";
    } elseif (!strpos($skills, ",")) {
        $skillsErr = "Skills is not valid";
    }

    if (empty($question)) {
        $qErr = "A question is required";
    } elseif (strlen($question) >= 500) {
        $qErr = "Question is too long";
    }

    if (empty($name)) {
        $nameErr = "A question name is required";
    } elseif (strlen($password) < 3) {
        $nameErr = "Question name is too short";
    }
}

?>

<!DOCTYPE html>

<html lang="en">
    
<head>
    <title>Ask a Question</title>
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
    <div id="questionForm">
        <h2>Login</h2>

        <form action="question.php" method="POST">
            <label>Question Name: </label>
            <input type="text" name="name"><br><br>
            <label>Question: </label>
            <textarea rows="10" cols="55" name="question"></textarea><br><br>
            <label>Skills: </label>
            <input type="text" name="skills"><br><br>
            <p style="color: red"><?php echo $nameErr; ?></p>
            <p style="color: red"><?php echo $qErr; ?></p>
            <p style="color: red"><?php echo $skillsErr; ?></p>
            <input type="submit">
        </form>

    </div>


</body>


</html>