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


