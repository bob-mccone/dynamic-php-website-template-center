<!-- Header -->
<?php
    define("TITLE", "Team | Real Good Food");
    include('includes/header.php');
?>

    <div id="team-content" class="content">
        <h1>Meet the team</h1>
        <p>Real Good Food strives on giving you great food and treating you 
        like royalty because no one comes back if the meal is rubbish. They 
        love people from all walks of life, young and old, just one condition 
        &ldquo;you must love great food&rdquo;. So bring your appetite, an 
        empty stomach and you will leave with a smile on your face and a full 
        happy belly. Enjoy</p>
    </div>

    <!-- Start of for each loop -->
    <?php 
        foreach ($teamMembers as $member) {
    ?>
    
    <div id="member-portrait">
            <img src="img/<?php echo $member[img]; ?>.png" alt="<?php echo $member[name]; ?>">
    </div><!-- member-portrait -->

    <div id="member-details">
            <h2><?php echo $member[name];?> - <?php echo $member[position]; ?></h2>
            <p><?php echo $member[bio]; ?></p>
    </div><!-- member-details -->

    <!--End of foreach loop -->
    <?php
        }
    ?>

<!-- Footer -->
<?php
    include('includes/footer.php');
?>