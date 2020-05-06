<?php
    $companyName = "Real Good Food";
    define("TITLE", "Home | Real Good Food");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo TITLE; ?></title>
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body id="site-background">
        <div class="content-container">
            <div class="main-image">
                <a href="index.php" title="Return to home">
                    <img src="img/burrito-chicken-delicious-dinner.png" alt="Real Good Food">
                </a>
            </div><!-- main-image -->
            <div id="nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="team.php">Team</a></li>
                    <li><a href="contact">Contact</a></li>
                </ul>
            </div><!-- nav -->
            <div class="page-content">
                <div id="index-content">    
                    <hr>
                    <h1>The Real Good Food Promise</h1>
                    <p>At Real Good Food we have a promise, to use only fresh organic food
                        that is actually good for you and not pumped full of nasties. We know 
                        where our food comes from and we check regularly that our suppliers 
                        still follow our standards.</p>
                    <p>We want to treat you like royalty, because you deserve the best.</p>
                    </p>
                    <hr>
                </div>
                <div id="footer">
                    <div class="column-left">
                        <strong>Where to find us:</strong>
                        <p>111 Wellywood street,<br>
                        Wellywood, LI</p>
                        <strong>How to contact us:</strong>
                        <p>Phone: 313 9286</p>
                    </div><!-- column-left -->
                    <div class="column-mid">
                        <strong>Bookings</strong>
                        <p>Want to make a booking, do it the old fashioned way and give us a 
                            call otherwise click the button below to make a booking</p>
                        <a href="booking.php" class="button">Book</a>
                    </div><!-- column-mid -->
                    <div class="column-right">
                        <strong>Hours</strong><br>
                        <em>Monday - Wednesday:</em>
                        10am - 9pm<br>
                        <em>Thursday:</em>
                        10am - 11:30pm<br>
                        <em>Friday - Saturday:</em>
                        10am - 2am<br>
                        <em>Sunday:</em>
                        11am - 8pm
                    </div><!-- column-last -->
                </div><!-- footer -->
                <div id="copyright">
                    <p>&copy;<?php echo date('Y'); ?> | <?php echo $companyName; ?></p>
                </div>
            </div><!-- page-content -->
        </div><!-- content-container -->
    </body><!-- site-background -->
</html>