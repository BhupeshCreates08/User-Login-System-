<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include("db.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

   
    if(empty($username) || empty($password)) {
        echo "Please fill all fields!";
        exit();
    }

  
    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query Error: " . mysqli_error($conn));
    }

   
    if(mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);

        
        if(password_verify($password, $row['password'])) {

            $_SESSION['user'] = $username;

            
            header("Location: dashboard.php");
            exit();

        } else {
            echo "❌ Wrong Password!";
        }

    } else {
        echo "❌ User Not Found!";
    }
}
?>