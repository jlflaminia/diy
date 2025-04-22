<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master DIY</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
    <script src="script.js" defer></script>
</head>
<body>

    <nav class="navbar">
        <div class="logo-container">
            <img src="logo.png" alt="Logo" class="logo-img" width="30">
        </div>
        <div class="logo">Master DIY</div>
        <div class="nav-links">
            <li><a href="home">Home</a></li>
            <li class="dropdown">
        <a href="categories" class="dropbtn">Categories</a>
        <div class="dropdown-content">
            <a href="categories/phone.php">Phone</a>
            <a href="categories/computer.php">Computer</a>
            <a href="categories/household.php">Household</a>
            <a href="categories/appliances.php">Appliances</a>
            <a href="categories/apparel.php">Apparel</a>
        </div>
    </li>
            <li><a href="news">News</a></li>
            <?php if (isset($_SESSION['username'])): ?>
                <li><a href="logout.php">Logout</a></li>
            <?php else: ?>
                <li><a href="#" id="login-btn">Login</a></li>
                <!-- <li><a href="#" id="register-btn">Register</a></li> -->
            <?php endif; ?>
        </div>

        <div class="menu-toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>


    <div class="main">
    <h1>Welcome to Master DIY</h1>
    
    <div class="search-box">
        <h2>Find the best repair guides</h2>
        <input type="text" class="search-input" placeholder="Search for a device">
        <button class="find-device">Find Device</button>
    </div>

    <div class="categories">
    <a href="categories/1.png"><img src="categories/iphone.png" alt="Category 1"></a>
    <a href="categories/2.png"><img src="categories/monitor.png" alt="Category 2"></a>
    <a href="categories/3.png"><img src="categories/household-appliance.png" alt="Category 3"></a>
    <a href="categories/4.png"><img src="categories/home.png" alt="Category 4"></a>
    <a href="categories/5.png"><img src="categories/hang-clothes.png" alt="Category 5"></a>
</div>

 <div id="login-modal" class="modal">
    <div class="modal-content">
        <span class="close-btn">&times;</span>
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" class="login-btn">Login</button>
        </form>
        <p>Don't have an account? <a href="#" id="register-btn">Register here</a>.</p>
    </div>
</div>

    <div id="register-modal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h2>Register</h2>
            <form action="register.php" method="POST">
                <label for="reg-username">Username:</label>
                <input type="text" id="reg-username" name="username" required>
                <label for="reg-password">Password:</label>
                <input type="password" id="reg-password" name="password" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <button type="submit" class="register-btn">Register</button>
            </form>
        </div>
    </div>

    <section class="container">
        <h1>Never Take Broken for an Answer</h1>
        <p>Get the instructions you need with quality repair parts and tools and the expertise of a robust community.</p>
        <div class="cards">
            <div class="card">
                <h2>Step-by-Step Guides</h2>
                <p>Learn how to fix anything with simple, easy-to-follow instructions created by the community.</p>
                <a href="#">Find a Guide</a>
            </div>
            <div class="card">
                <h2>Quality Parts and Tools</h2>
                <p>Precision tools and thousands of parts to get the job done, backed by our Lifetime Guarantee.</p>
                <a href="#">Shop our Store</a>
            </div>
            <div class="card">
                <h2>A Community of Fixers</h2>
                <p>Join tools and resources for everyone who knows how to fix something.</p>
                <a href="#">Fix the World</a>
            </div>
        </div>
    </section>

</body>
</html>