<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include "include/head.php"; ?>
    <title>Bee Inc. | Home</title>
</head>

<body>
    <?php include "include/nav.php"; ?>
    
    <section class="section">
        <div class="container">
            <?php if(isset($_SESSION['loggedin'])) { ?>
                <p> <?php echo $_SESSION['first_name']; ?> </p>
            <?php } ?>
            <h1 class="title">
                Welcome to Bee Incorporated!
            </h1>
            <p class="subtitle">Learn how to save the bees!</p>
        </div>
    </section>

    <?php include "include/footer.php"; ?>
</body>

</html>
