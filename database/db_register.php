<?php 
session_start();
include "db_connect.php";

$user = $_POST['username'];
$pass = $_POST['password'];
$pass_hash = sha1($_POST['password']);
$first = $_POST['firstname'];
$last = $_POST['lastname'];

$sql = "INSERT INTO user_accounts (
            user_name,
            password,
            first_name,
            last_name ) 
        VALUES (
            '$user',
            '$pass_hash',
            '$first',
            '$last' )";

$_SESSION['loggedin'] = true;
$query = mysqli_query($connection, $sql);

if(!$query) {
    die('<br>Could not connect to database: ' . mysqli_error($connection));
}
else {
    echo "Account successfully registered.";
    echo "<br><a href='../index.php'>Now go save the bees!</a>";
	header("Location: ../index.php");
}

mysqli_close($connection);

?>