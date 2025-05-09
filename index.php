<?php
    include("connection.php");
    include("read.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <p>Login page</p>
        </header>

        <div class="login-container">
            <div class="login-box">
                <h2>Log into your account:</h2>
                <form action="login.php" method="post">
                    <input type="text" name="username" placeholder="E-mail" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <input type="submit" name="submit" value="Login">
                </form>
            </div>
        </div>

        <footer>
            <p>Login page by Szabó Tamás | NK-H67SLM</p>
        </footer>
    </body>
</html>