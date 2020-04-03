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
            <h1>Register Account</h1>

            <form id="register" action="database/db_register.php" method="POST">
                <input type="text" name="first_name">
                <label for="first_name">First Name</label>
                <br>

                <input type="text" name="last_name">
                <label for="last_name">Last Name</label>
                <br>

                <input type="text" name="user_name">
                <label for="username">Username</label>
                <br>

                <input type="password" name="password">
                <label for="password">Password</label>
                <br>

                <input type="submit" name="submit" value="Register">
            </form>

            <p id="loading"></p>
			<p id="response"></p>
        </div>
    </section>

    <?php include "include/footer.php"; ?>
</body>

</html>
