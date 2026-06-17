<?php
include "db.php";

$username = $_POST['username'];
$password = $_POST['password'];


if (empty($username) || empty($password)) {
    echo "Please fill all fields!";
    exit();
}


$check = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $check);

if (!$result) {
    die("Error: " . mysqli_error($conn));
}

if (mysqli_num_rows($result) > 0) {
    echo "Username already exists!";
    exit();
}


$hashed_password = password_hash($password, PASSWORD_DEFAULT);


$sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";

if (!mysqli_query($conn, $sql)) {
    die("Error: " . mysqli_error($conn));
}

echo "Registration successful! <br><a href='index.php'>Login here</a>";
?>