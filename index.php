<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medenin - Medical Clinic</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/hero.css">
    <link rel="stylesheet" href="styles/features.css">
    <link rel="stylesheet" href="styles/about.css">
    <link rel="stylesheet" href="styles/footer.css">
    

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> -->
    <script src="https://kit.fontawesome.com/8ef1de9f50.js" crossorigin="anonymous"></script>
    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body>
    <header class="header">
        <div class="logo">
            <h3 class=" animate__animated animate__zoomInLeft">Medenin</h3>

        </div>
        <nav class="nav-menu">
            <a href="#" class="active">Home</a>
            <a href="#short">About Us</a>
            <a href="#contact">Contact Us</a>
            <a href="#">Blog</a>
           
        </nav>
        <div class="header-right">
            <!-- <div class="cart">
                <i class="fas fa-shopping-cart"></i>
                <span class="cart-badge">0</span>
            </div> -->
            <button class="appointment-btn"><a href="signup.php">Sign Up</a></button>
            <button class="appointment-btn"><a href="login.php">Login </a></button>
        </div>
    </header>

    <section class="hero">
        <div class="hero-content">
            <p class="subtitle">  We are here for you</p>
            <h1>What Makes Us Better, Makes You Better.</h1>
            <p class="description">At the heart of our mission is an unwavering commitment to transforming healthcare through innovation, compassion, and personalized care. We believe that excellence isn't just about advanced medical technologies or cutting-edge treatments—it's about how we approach each patient's journey with empathy, precision, and genuine human connection..</p>
            <div class="hero-buttons">
                <!-- <button class="make-appointment"><a href="signup.php">Make Appointment</a></button> -->
                <button class="appointment-btn"><a href="login.php">Make Appointment </a></button>
            </div>
        </div>
        <div class="hero-image">
            <img src="doctor.jpg" alt="Doctor with stethoscope">
        </div>
    </section>

    <!-- <section class="booking-form">
        <div class="form-container">
            <input type="text" placeholder="Enter Your Name">
            <input type="text" placeholder="Select Your Location">
            <select>
                <option value="">Select a Service</option>
            </select>
            <button class="book-now">BOOK NOW</button>
        </div>
    </section> -->

    <section class="features">
        <div class="feature-card">
            <!-- <div class="feature-icon specialized"></div> -->
          <div class="icon"><i class="fa fa-thermometer-full" aria-hidden="true"></i></div>  
            <h3>Specialised Service</h3>
            <!-- <p>Lorem ipsum dolor sit</p> -->
        </div>
        <div class="feature-card">
            <!-- <div class="feature-icon care"></div> -->
             <div class="icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
            <h3>24/7 Advanced Care</h3>
            <!-- <p>Lorem ipsum dolor sit</p> -->
        </div>
        <div class="feature-card">
            <!-- <div class="feature-icon results"></div> -->
            <div class="icon"><i class="fa fa-laptop" aria-hidden="true"></i></div>
            <h3>Get Result Online</h3>
            <!-- <p>Lorem ipsum dolor sit</p> -->
        </div>
    </section>

    <section class="about">
        <div class="about-video">
            <!-- <img src="doctor-patient.jpg" alt="Doctor with patient">
            <button class="play-video-btn"> -->
                <video controls>
                    <source src=" video.mp4" type="video/mp4">
                    
                  </video>
                
                <!-- <i class="fas fa-play"></i> -->
                <span>PLAY VIDEO</span>
            </button>
        </div>
        <div class="about-content">
            <h2 id="short">Short Story About Mededin Clinic.</h2>
            <p>Over the years, Mededin Clinic grew not by chasing trends, but by staying true to its founding principles. They invested in continuous staff training, embraced technological innovations that genuinely improved patient care, and created an environment where empathy was as important as medical expertise.
                Today, Mededin Clinic has grown into a comprehensive healthcare center, serving thousands of patients annually. But at its heart, it remains true to Elena's original vision—a place where advanced medical care meets genuine human compassion.
                Our story continues with every patient we serve, every life we touch, and every challenge we help overcome..</p>
         
            <div class="stats">
                <div class="stat-item">
                    <h3>1000+</h3>
                    <p>Happy Patients</p>
                </div>
                <div class="stat-item">
                    <h3>215+</h3>
                    <p>Expert Doctors</p>
                </div>
                <div class="stat-item">
                    <h3>315+</h3>
                    <p>Hospital Rooms</p>
                </div>
                <div class="stat-item">
                    <h3>106+</h3>
                    <p>Award Winner</p>
                </div>
            </div>
        </div>
    </section>

    <footer id="contact" class="footer">
        <div class="footer-content">
            <div class="footer-info">
                <div class="footer-logo">Medenin.</div>
                <p class="footer-description">
                    Providing exceptional healthcare services with a commitment to excellence and compassionate care for our community.
                </p>
                <div class="social-links">
                    <a href="https://wa.me/0741664611" class="social-link" target="_blank">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="https://www.instagram.com/bendy2423" class="social-link" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/john-brandews-8657562bb" class="social-link" target="_blank">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://twitter.com/@Lilbendy3" class="social-link" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>
            <div class="contact-info">
                <h3>Contact Us</h3>
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <span>+254 111666710</span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <span>johnbrandews@gmail.com</span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>123 Medical Center Drive<br>Healthcare City, HC 12345</span>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Medenin. All rights reserved.</p>
        </div>
    </footer>
    <script src="index.js"></script>
</body>
</html>
</body>
</html>