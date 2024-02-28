<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styles -->
    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/index.css">
    <title>PUP - Landing Page</title>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="nav-logo-content">
                <div class="nav-logo"><img src="img/school-logo-w.png" alt="logo"></div>
                <div class="nav-school-name"><span>Polytechnic University of the Philippines</span><br>PUP Student ID</div>
            </div>
            <div class="nav-menu">
                <ul class="nav-links">
                    <li class="nav-items"><a href="#">Home</a></li>
                    <li class="nav-items"><a href="#">About</a></li>
                    <li class="nav-items"><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="signin-btn">
                <a href="login.php" class="btn-form">Sign In</a>
            </div>
            <div id="sidebar">
                <a href="#" onclick="closeSidebar()"><img src="icon/cancel.svg" alt=""></a>
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
                <div class="signin-btn-2">
                    <a href="login.php" class="btn-form">Sign In</a>
                </div>
            </div>
            
            <div class="content">
                <div id="open-btn" onclick="openSidebar()">☰</div>
            </div>
        </div>
    </div>
    <section id="heroSection">
        <div class="container">
            <div class="hero-section">
                <div class="hero-content">
                    <div class="hero-logo"><img src="img/school-logo-b.png" alt=""></div>
                    <div class="hero-slogan"><h1>"Mula Sa'Yo, Para sa Bayan"</h1></div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/sidebar.js"></script>
</body>
</html>




