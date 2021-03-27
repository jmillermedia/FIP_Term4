<?php
require '../load.php';

if(isset($_SESSION['user_id'])){
    redirect_to("index.php");
}

if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    if(!empty($username) && !empty($password)){
        $result = login($username,$password);
        $message = $result;
    } else{
        $message = 'Please fill out the required fields ';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>London Referees Group</title>
    <link rel="stylesheet" href="../public/css/main.css">
    <link rel="stylesheet" href="../public/css/reset.css">

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
            <nav class="nav__main">
                <ul class="nav__main--ul">
                    <li class="nav__main--li"><a href="../views/index.html">Home</a></li>
                    <li class="nav__main--li"><a href="../views/about.html">About Us</a></li>
                    <li class="nav__main--li"><a href="../views/members.html">Members</a></li>
                    <li class="nav__main--li"><a href="../views/train.html">Train</a></li>
                    <li class="nav__main--li"><a href="../views/contact.html">Contact Us</a></li>
                </ul>
            </nav>
            <nav class="nav__mobile hidden"> <!-- toggle hidden class with JS-->
                <h2 class="hidden">Mobile Nav</h2>
                <ul class="nav__mobile--ul">
                    <li class="nav__mobile--li"><a href="../views/index.html">Home</a></li>
                    <li class="nav__mobile--li"><a href="../views/about.html">About Us</a></li>
                    <li class="nav__mobile--li"><a href="../views/members.html">Members</a></li>
                    <li class="nav__mobile--li"><a href="../views/train.html">Train</a></li>
                    <li class="nav__mobile--li"><a href="../views/contact.html">Contact Us</a></li>
                </ul>
            </nav>
        </header>

        <!-- Header Section -->
        <section class="header" style="background-image: url(../public/images/heroContact.jpg);">
            <h2 class="hidden">Hero Photo Section</h2>
            <img class="header__logo" src="../public/images/logo.svg" alt="LRG Logo">
            <p class="header__slogan">Admin Login</p>
        </section>

        <section class="adminForm">
            <h2 class="adminForm__heading">Admin Login</h2>
            <hr>
            <?php echo !empty($message)?$message:''; ?>
            <form action="admin_login.php" method="post">
                <label for="username">Username:</label>
                <input id="username" type="text" name="username" value="" placeholder="Username">
                <br><br>
                <label for="password">Password:</label>
                <input id="password" type="password" name="password" placeholder="Password">
                <br><br>
                <button type="submit" name="submit">Sign In</button>
            </form>
        </section>

<footer class="footer">
            <div class="footer__partners">
                <h2>Partners:</h2>
                    <div class="footer__partners--logos">
                        <a href="#" class="partnerLink"><img src="../public/images/partnerHockeyCanada.svg" alt="Partner Icon"></a>
                        <a href="#" class="partnerLink"><img src="../public/images/partnerOHF.svg" alt="Partner Icon"></a>
                        <a href="#" class="partnerLink"><img src="../public/images/partnerAllianceHockey.svg" alt="Partner Icon"></a>
                        <a href="#" class="partnerLink"><img src="../public/images/partnerOMHA.svg" alt="Partner Icon"></a>
                        <a href="#" class="partnerLink"><img src="../public/images/partnerWHA.svg" alt="Partner Icon"></a>
                        <a href="#" class="partnerLink"><img src="../public/images/partnerOHA.svg" alt="Partner Icon"></a>
                        <a href="#" class="partnerLink"><img src="../public/images/partnerSportAbility.svg" alt="Partner Icon"></a>
                    </div>
            </div>

            <img src="../public/images/logo.svg" alt="LRG Logo" class="footer__logo">

            <nav class="footer__socialNav">
                <h2 class="hidden">Social Media Navigation</h2>
                <ul>
                    <li><a href="#"><img src="../public/images/facebook.svg" alt="facebook"></a></li>
                    <li><a href="#"><img src="../public/images/twitter.svg" alt="twitter"></a></li>
                    <li><a href="#"><img src="../public/images/insta.svg" alt="instagram"></a></li>
                    <li><a href="#"><img src="../public/images/youtube.svg" alt="youtube"></a></li>
                </ul>
            </nav>

            <div class="footer__contact">
                <a href="tel:222-111-2222"><img src="../public/images/phoneIcon.svg" alt="Phone Icon"> 222-111-2222</a>
                <a href="mailto:lrg@londonrefereesgroup.com"><img src="../public/images/emailIcon.svg" alt="email Icon"> lrg@londonrefereesgroup.com</a>
            </div>

            <nav class="footer__mainNav">
                <h2 class="hidden">Footer Nav</h2>
                <ul>
                    <li><a href="../views/index.html">Home</a></li>
                    <li><a href="../views/about.html">About Us</a></li>
                    <li><a href="../views/members.html">Members</a></li>
                    <li><a href="../views/train.html">Train</a></li>
                    <li><a href="../views/contact.html">Contact Us</a></li>
                </ul>
            </nav>

            <p class="footer__copyright">© 2020 all rights reserved</p>
        </footer>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script defer type="module" src="../public/scripts/main.js"></script>
</body>
</html>