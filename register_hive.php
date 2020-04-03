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
            <h1>Register Hive</h1>

            <form id="register_hive" action="database/db_register_hive.php" method="POST">
                <input type="text" name="hive_name">
                <label for="hive_name">Hive Name</label>
                <br>

                <input type="text" name="location">
                <label for="location">Location</label>
                <br>

                <input type="text" name="pop_size">
                <label for="pop_size">Population Size</label>
                <br>

                <input type="text" name="species">
                <label for="species">Species</label>
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
