<?php
	session_start();
    include "db_connect.php";
    
    $hive_name = $_POST["hive_name"];
	$user_id = $_SESSION["user_id"];
	$location = $_POST["location"];
	$pop_size = $_POST["pop_size"];
	$species = $_POST["species"];


    $sql = "INSERT INTO hive_records (
                user_id,
                hive_name,
                location,
                population_size,
                species) 
            VALUES (
                '$user_id',
                '$hive_name',
                '$location',
                '$pop_size',
                '$species');";

    $query = mysqli_query($connection, $sql);
    
    if(!$query) {
        die('<br>Could not connect to database: ' . mysqli_error($connection));
    }
    else {
        echo "Hive registration successful.<br><a href='../index.php'>Keep up the great work!</a>";
        header("Location: ../index.php");
    }
	mysqli_close($connection);
?>
