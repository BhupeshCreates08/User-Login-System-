<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>


<div class="navbar">
    <h1>MySite</h1>
    <div>
        <a href="index.php">Login</a>
        <a href="register.html">Register</a>
    </div>
</div>


<h1 class="bg-title">MySite</h1>


<div class="main">
    <div class="container">
        <h2>Login</h2>

        <form action="login.php" method="POST">
            <input type="text" name="username" placeholder="Enter Username" required>
            <input type="password" name="password" placeholder="Enter Password" required>
            <button type="submit" name="login">Login</button>
        </form>

        <p>New user? <a href="register.html">Register</a></p>
    </div>
</div>

</body>
</html>