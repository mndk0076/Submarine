<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>underwater restaurant</title>
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="styles/careersStyle.css">
    </head>
    <body>
        <header id="header">
            <div class="main-logo">
            <a href="homepage.html"><img id="underwater-logo" src="images/logo_white.png" alt="underwater restaurant logo" width="100" title="underwater restaurant"/></a>
            </div>
            <nav id="main-menu">
                <ul class="top-nav">
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="location.html">LOCATION</a></li>
                    <li><a href="menu.html">MENU</a></li>
                    <li><a href="weeklyspecial.html">WEEKLY SPECIAL</a></li>
                    <li><a href="eventsbooking.html">RESERVATIONS</a></li>
                    <li><a href="contacts.php">CONTACT</a></li>
                </ul>
            </nav>
        </header>
        <main id="main">
            <h1>Wanna join our amazing staff?</h1>
            <p>If you're interesting in joining us submit a resume</p>

            <span id="formSuccess"></span>

            <?php 
                include 'includes/careers/addCareer.php';
            ?>
        </main>
        <footer id="footer">
            <div id="aside-info-left">
                <aside id=asideinfoleft>
                    <h2 class="hidden">Footer navigation</h2>
                    <ul class="bottom-nav">
                        <li><a href="hours.html">Hours</a></li>
                        <li><a href="menu.html">Menu</a></li>
                        <li><a href="giftcard.html">Gift Card</a></li>
                        <li><a href="sitemap.html">Site Map</a></li>
                        <li><a href="careers.php">Careers</a></li>
                        <li><a href="contacts.php">Contact</a></li>
                    </ul>
                    <p class="right">© Copyright underwater restaurant. All rights reserved.</p>
                </aside>
            </div>
            <div id="aside-info-right">
                <aside id=asideinforight>
                    <ul class="bottom-nav">
                        <li><a href="homepage.html"><img src="images/logo_344a6d.png" alt="underwater restaurant logo"
                                    width="150" title="underwater restaurant" /></a>
                            <p class="footerp">5000 Yonge St. Toronto, ON M2N 7E9</p>
                            <p class="footerp">(416)050-5050</p>
                        </li>
                        <a href="www.facebook.com/underwater"><i class="fab fa-facebook-square"></i></a>
                        <a href="instagram.html"><i class="fab fa-instagram"></i></a>
                        <a href="twitter.html"><i class="fab fa-twitter-square"></i></a>
                    </ul>
                </aside>
            </div>
        </footer>
        <script src="javascript/careers.js"></script>
    </body>

</html>