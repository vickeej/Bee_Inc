<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include "include/head.php"; ?>
    <title>Bee Inc. | Contact Us</title>
</head>

<body>
    <?php include "include/nav.php"; ?>
    
    <section class="section">
        <div class="container">
            <?php if(isset($_SESSION['loggedin'])) { ?>
                <p> <?php echo $_SESSION['first_name']; ?> </p>
            <?php } ?>
            <h1 class="title">Page is under construction</h1>
        </div>
    </section>

    <?php include "include/footer.php"; ?>
</body>

</html>
