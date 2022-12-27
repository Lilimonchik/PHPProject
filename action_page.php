<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["fname"])) {
        $fnameErr = "Name is required";
    }
    else {
        $fname = test_input($_POST["fname"]);
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["lname"])) {
        $lnameErr = "Name is required";
    }
    else {
        $lname = test_input($_POST["lname"]);
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["datemin"])) {
        $dataminErr = "Name is required";
    }
    else {
        $datamin = test_input($_POST["datemin"]);
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
        $emailErr = "Name is required";
    }
    else {
        $email = test_input($_POST["email"]);
    }
}
echo "Ваше ім'я:$fname";
echo "<br>";
echo "Ваше прізвище:$lname";
echo "<br>";
echo "Ваша дата народження:$datamin";
echo "<br>";
echo "Ваша пошта:$email";
?>