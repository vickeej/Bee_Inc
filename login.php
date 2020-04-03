<?php 
session_start(); 
include "database/db_connect.php";
?>
<!DOCTYPE html>
<html>

<head>
    <?php include "include/head.php"; ?>
    <title>Bee Inc. | Register</title>
</head>

<body>
    <?php include "include/nav.php"; ?>

    <section class="section">
        <div class="container">
            <h1>Login</h1>

            <form id="login" action="database/db_login.php" method="POST">
                <input type="text" name="user_name">
                <label for="user_name">Username</label>
                <br>

                <input type="password" name="password">
                <label for="password">Password</label>
                <br>

                <input type="submit" name="submit" value="Login">
            </form>

            <p id="loading"></p>
			<p id="response"></p>
        </div>
    </section>

    <?php include "include/footer.php"; ?>
</body>

</html>