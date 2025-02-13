<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlavorFusion</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400..800&family=Baloo+Bhaina+2:wght@400..800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navigation Bar -->
    <nav id="nav">
        <div class="logo">
            <img src="images/logo.jpg" alt="FlavorFusion Logo">
        </div>
        <ul>
            <li class="item"><a href="#home">Home</a></li>
            <li class="item"><a href="#services-container">Services</a></li>
            <li class="item"><a href="#client-section">About Us</a></li>
            <li class="item"><a href="#contact-section">Contact Us</a></li>
        </ul>
    </nav>

    <!-- Home Section -->
    <div id="home">
        <h1 class="primary-heading">Get ready to ignite your taste buds! <span>Welcome to FlavorFusion!</span></h1>
        <p>Welcome to <strong>FlavorFusion</strong>, where every dish is a unique blend of flavors crafted to tantalize
            your taste buds.</p>

        <p>At <strong>FlavorFusion</strong>, we turn food into unforgettable experiences with creativity and passion in
            every bite.</p>
        <button class="btn">Order Now</button>

    </div>

    <!-- Services Section -->
    <div id="services-container">
        <h1 class="primary-heading center">Taste the Magic We Serve</h1>
        <div class="services">
            <div class="box">
                <img src="images/img.jpg" alt="FlavorFusion">
                <h2 class="secondary-heading center">Food Ordering</h2>
                <p class="center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, illo.</p>
            </div>
            <div class="box">
                <img src="images/img1.jpg" alt="FlavorFusion">
                <h2 class="secondary-heading center">Food Ordering</h2>
                <p class="center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, illo.</p>
            </div>
            <div class="box">
                <img src="images/img2.jpg" alt="FlavorFusion">
                <h2 class="secondary-heading center">Food Ordering</h2>
                <p class="center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, illo.</p>
            </div>
        </div>
    </div>
    <section id="client-section">
        <h1 class="primary-heading center"> our clients</h1>
        <div class="clients">
            <div class="client-item">
                <img src="images/client1.jpg" alt="our client">
            </div>
            <div class="client-item">
                <img src="images/client2.jpg" alt="our client">
            </div>
            <div class="client-item">
                <img src="images/client3.jpg" alt="our client">
            </div>
        </div>
    </section>

    <section id="contact-section">
        <h1 class="primary-heading center">Contact Us</h1>
        <div class="contact-box">
            <form action="userinfo.php" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" name="phone" id="phone" placeholder="Enter your phone number" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" placeholder="Type your message here..." required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn" >Send Message</button>
                </div>
            </form>
        </div>
    </section>

    <footer>
    <div class="footer-container">
        <h2>FlavorFusion</h2>
        <p>🍽️ Bringing flavors to life!</p>

        <nav class="footer-nav">
            <a href="#home">Home</a>
            <a href="#client-section">About</a>
            <a href="#services-container">Services</a>
            <a href="#contact-section">Contact</a>
        </nav>

        <div class="footer-info">
            <p>📍 Location: Dehradun</p>
            <p>📞 Contact: 89796XXXXX</p>
            <p>📧 Email: Prabhakartech42@gmail.com</p>
        </div>

        <div class="footer-social">
            <p>Follow Us:</p>
            <p>Facebook | Instagram | Twitter | Pinterest</p>
        </div>

        <div class="footer-links">
            <p>🔒 Privacy Policy | 📜 Terms & Conditions</p>
        </div>
    </div>
</footer>


</body>

</html>