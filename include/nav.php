<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="index.php">
            <img src="" width="112" height="28" alt="Icon Placeholder">
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="index.php">Home</a>
            <a class="navbar-item" href="whats_the_buzz.php">What's the Buzz</a>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">About Us</a>
                <div class="navbar-dropdown">
                    <a class="navbar-item" href="contact.php">Contact Us</a>
                </div>
            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Resources</a>
                <div class="navbar-dropdown">
                    <a class="navbar-item" href="backyard_beekeeping.php">Backyard Beekeeping</a>
                    <a class="navbar-item" href="how_you_can_help.php">How You Can Help</a>
                    <a class="navbar-item" href="identify_species.php">How to Identify Species</a>
                </div>
            </div>
        </div>

        <?php if (!isset($_SESSION["loggedin"])) { ?>
            <div class="navbar-end">
                <div class="navbar-item">                
                    <div class="buttons">
                        <a class="button" href="donate.php">Donate</a>
                        <a class="button" href="register.php">Register</a>
                        <a class="button" href="login.php">Login</a>
                    </div>
                </div>
            </div>
        <?php } else { ?>
            <div class="navbar-end">
                <div class="navbar-item">                
                    <div class="buttons">
                        <a class="button" href="donate.php">Donate</a>
                        <a class="button" href="my_hives.php">My Hives</a>
                        <a class="button" href="database/db_logout.php">Logout</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</nav>




