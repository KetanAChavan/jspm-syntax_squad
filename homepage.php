<?php
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RKM Junior College</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style copy.css">
</head>

<body>
    <!-- Header / Navigation Bar -->
    <header>
        <div class="logo">
            <img src="logo.png" alt="RKM Junior College Logo">
            <h1>RKM Junior College</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#courses">Courses</a></li>
                <li><a href="index.php">Login/Register</a></li>
            </ul>
        </nav>
    </header>
    

    <!-- Hero Section -->
    <section id="home" class="hero" background-image:url(bg.jpg)>
        <div class="hero-content">
    
            <h2>Welcome to RKM Junior College</h2>
            <p>Empowering the future with education</p>
            <a href="#about" class="cta-button">Learn More</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="about-content">
            <h2>About Us</h2>
            <p>At RKM Junior College, we are committed to providing the best education in a dynamic and modern environment. Join us to build a bright future!</p>
        </div>
    </section>

    <!-- Courses Section -->
    <section id="courses" class="courses">
        <h2>Our Courses</h2>
        <div class="course-list">
            <div class="course">
                <h3>Science</h3>
                <p>Explore the world of science and build a strong foundation in mathematics, physics, and biology.</p>
            </div>
            <div class="course">
                <h3>Arts</h3>
                <p>Specialize in humanities, history, literature, and creative arts. Shape your future with art and culture.</p>
            </div>
            <div class="course">
                <h3>Commerce</h3>
                <p>Prepare for a career in business, finance, and economics with hands-on learning and practical exposure.</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <h2>Contact Us</h2>
        <p>Have questions? Reach out to us via email or phone.</p>
        <p>Email: info@rkmschool.com</p>
        <p>Phone: +1234567890</p>
    </section>

    <!-- Footer -->
    <footer class="moving-footer">
        <p>&copy; 2024 RKM Junior College. All rights reserved.</p>
    </footer>
    

    <script src="script copy.js"></script>
</body>

</html>
