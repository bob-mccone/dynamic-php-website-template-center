<?php
    $companyName = "Real Good Food";
    include('includes/arrays.php');
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
                    <img src="img/burger.png" alt="Burger">
                </a>
            </div><!-- main-image -->
            <div id="nav">
                <?php include('includes/nav.php'); ?>
            </div><!-- nav -->
            <div class="page-content">
                <hr>