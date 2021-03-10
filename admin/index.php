<?php
require_once '../load.php';
confirm_logged_in();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>London Referees Group</title>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/reset.css">

</head>
<body>
    <main id="app">
        <h1 class="hidden">Main Site</h1>
            <div class="burgerButton">
                <div class="burgerBar1"></div>
                <div class="burgerBar2"></div>
                <div class="burgerBar3"></div>
            </div>

        <!-- Main Navigation Section (mobile and desktop) -->
        <header class="nav">
            <h2 class="hidden">Main Nav</h2>
            <nav class="nav__main hidden">
                <ul class="nav__main--ul">
                    <li class="nav__main--li selected">Home</li>
                    <li class="nav__main--li">About Us</li>
                    <li class="nav__main--li">Members</li>
                    <li class="nav__main--li">Train</li>
                    <li class="nav__main--li">Contact Us</li>
                </ul>
            </nav>
            <nav class="nav__mobile hidden"> <!-- toggle hidden class with JS-->
                <h2 class="hidden">Mobile Nav</h2>
                <ul class="nav__mobile--ul">
                    <li class="nav__mobile--li selected"><a href="#" class="selected">Home</a></li>
                    <li class="nav__mobile--li"><a href="/about">About Us</a></li>
                    <li class="nav__mobile--li"><a href="/members">Members</a></li>
                    <li class="nav__mobile--li"><a href="/train">Train</a></li>
                    <li class="nav__mobile--li"><a href="/contact">Contact Us</a></li>
                </ul>
            </nav>
        </header>

        <!-- Header Section -->
        <section class="header" style="background-image: url(../images/heroIndex.jpg);">
            <h2 class="hidden">Hero Photo Section</h2>
            <img class="header__logo" src="images/logo.svg" alt="LRG Logo">
            <p class="header__slogan">The Game Is In Your Hands</p>
            <button class="header__learn">Learn More</button>
        </section>
<h2>Welcome to the dashboard page <?php echo $_SESSION['user_fname']; ?></h2>

<a href="admin_logout.php">Sign out</a>
    
</body>
</html>