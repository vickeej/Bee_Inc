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
            <?php
                $user_id = $_SESSION["user_id"];
                $sql = "SELECT * FROM hive_records 
                        WHERE user_id = '" . $user_id . "'";

                $result = mysqli_query($connection, $sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0) { 	// output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<p><strong>" . $row['hive_name'] . "</strong></p>";
                        echo "<ul>";
                        echo "<li>Location: " . $row['location'] . "</li>";
                        echo "<li>Population Size: " . $row['population_size'] . "</li>";
                        echo "<li>Species: " . $row['species'] . "</li>";
                        echo "<li>Created: " . $row['hive_start_date'] . "</li>";
                        echo "</ul><br>";
                    }
                }
                else
                    echo "There are currently no hives.";
                
                    mysqli_close($connection);	
            ?>

            <button><a href="register_hive.php">Register Hive</a></button>
        </div>
    </section>

    <?php include "include/footer.php"; ?>
</body>

</html>

