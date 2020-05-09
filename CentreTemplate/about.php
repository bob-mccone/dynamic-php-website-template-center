<!-- Header -->
<?php
    define("TITLE", "About | Real Good Food");
    include('includes/header.php');

    date_default_timezone_set('Pacific/Auckland');
    $todaysDate = date('Y');
    $startDate = 2002;
    $operatingTime = ($todaysDate - $startDate);
?>

    <div id="about-content" class="content">
        <h1>The story</h1>
        <p>Here at real good food we have a story that started it all. It 
        was back in the good old days of 2002 (that's <?php echo $operatingTime; ?> years 
        and counting), our mission back then is the same as it is today, &ldquo;to use 
        only fresh organic food that is actually good for you&rdquo;.</p><br>
        <p>It all started when a chef (Doug Big) would go to local events and found 
        there wasn't much nice good food at a fair price, it was mainly deep fried 
        and cheap, so Doug decided to do something about it. He brought a food cart 
        for local events, offering better organic food for everyone involved and it 
        grew from there, the food cart was providing popular so the idea 
        of opening a resturant came to light, Doug just needed a team to help 
        him operate it.</p>
    </div><!-- about-content -->

<?php
    include('includes/footer.php');
?>