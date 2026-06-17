<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>

<div class="navbar">
    <h1>Dashboard</h1>
    <a href="logout.php">Logout</a>
</div>

<div class="main">
    <div class="container">
        <h2>Welcome, <?php echo $_SESSION['user']; ?> 👋</h2>
        <p>You are logged in successfully.</p>
    </div>
</div>

</body>
</html>