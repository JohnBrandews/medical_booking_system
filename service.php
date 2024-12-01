<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    // Redirect to login if not logged in
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/service.css">
    <link rel="stylesheet" href="styles/footer.css">

    <script src="https://kit.fontawesome.com/8ef1de9f50.js" crossorigin="anonymous"></script>

</head>
<body>
    <!-- //images used come from unsplash i have just decided to use their links -->
<section class="services">
        <div class="services-title">
            <h2>Our Medical Services</h2>
            <!-- <div class="log">
        <a href="logout.php">Logout</a>
        </div> -->
            <p>Expert healthcare professionals dedicated to providing you with the best medical care</p>
        </div>
        <div class="log">
        <a href="logout.php">Logout</a>
        </div>
        <div class="doctors-grid">
            <div class="doctor-card">
                <img src="https://images.unsplash.com/photo-1537368910025-700350fe46c7?w=500" alt="Dr. Sarah Johnson" class="doctor-image">
                <div class="doctor-info">
                    <h3 class="doctor-name">Dr. Sarah Johnson</h3>
                    <p class="doctor-speciality">Dental Care Specialist</p>
                    <p class="doctor-description">Experienced dentist specializing in cosmetic dentistry, orthodontics, and general dental care with over 10 years of practice.</p>
                    <div class="doctor-contact">
                        <span class="contact-item">
                            <i class="fas fa-phone"></i>
                            <p><a href="tel:0111666710">+2540111666710</a></p>
                            
                        </span>
                        <span class="contact-item">
                            <i class="fas fa-envelope"></i>
                <a href="mailto:johnbrandews@gmail.com">johnbrandews@gmail.com</a>
                           
                        </span>
                    </div>
                    <!-- <a href="#" class="book-doctor">Book Appointment</a> -->
                    <a href="https://wa.me/0741664611" class="book-doctor" target="_blank">Book Appointment</a>

                </div>
            </div>

            <div class="doctor-card">
                <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=500" alt="Dr. Michael Chen" class="doctor-image">
                <div class="doctor-info">
                    <h3 class="doctor-name">Dr. Michael Chen</h3>
                    <p class="doctor-speciality">General Healthcare</p>
                    <p class="doctor-description">Board-certified physician providing comprehensive primary care services, preventive medicine, and chronic disease management.</p>
                    <div class="doctor-contact">
                        <span class="contact-item">
                            <i class="fas fa-phone"></i>
                            <p><a href="tel:0768163367">+2540768163367</a></p>
                         
                        </span>
                        <span class="contact-item">
                            <i class="fas fa-envelope"></i>
                <a href="mailto:brandewsj@gmail.com">brandewsj@gmail.com</a>
                            
                        </span>
                    </div>
                    <!-- <a href="#" class="book-doctor">Book Appointment</a> -->
                    <a href="https://wa.me/0703526520" class="book-doctor" target="_blank">Book Appointment</a>
                    
                </div>
            </div>

            <div class="doctor-card">
                <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=500" alt="Dr. Emily Martinez" class="doctor-image">
                <div class="doctor-info">
                    <h3 class="doctor-name">Dr. Emily Martinez</h3>
                    <p class="doctor-speciality">Pediatrician</p>
                    <p class="doctor-description">Dedicated pediatrician with expertise in child development, preventive care, and treating childhood illnesses.</p>
                    <div class="doctor-contact">
                        <span class="contact-item">
                            <i class="fas fa-phone"></i>
                            <p><a href="tel:0714426325">+2540714426325</a></p>
                          
                        </span>
                        <span class="contact-item">
                            <i class="fas fa-envelope"></i>
                <a href="mailto:johnbrandews@gmail.com">Emilyj@gmail.com</a>
                            
                        </span>
                    </div>
                    <!-- <a href="#" class="book-doctor">Book Appointment</a> -->
                    <a href="https://wa.me/0714426325" class="book-doctor" target="_blank">Book Appointment</a>

                </div>
            </div>

            <div class="doctor-card">
                <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=500" alt="Dr. Robert Wilson" class="doctor-image">
                <div class="doctor-info">
                    <h3 class="doctor-name">Dr. Robert Wilson</h3>
                    <p class="doctor-speciality">Oncologist</p>
                    <p class="doctor-description">Experienced oncologist specializing in cancer treatment, chemotherapy, and innovative cancer research protocols.</p>
                    <div class="doctor-contact">
                        <span class="contact-item">
                            <i class="fas fa-phone"></i>
                            <p><a href="tel:0741664611">+2540741664611</a></p>
                          
                        </span>
                        <span class="contact-item">
                            <i class="fas fa-envelope"></i>
                <a href="mailto:lilbendy91@gmail.com">lilbendy@gmail.com</a>
                          
                        </span>
                    </div>
                    <!-- <a href="#" class="book-doctor">Book Appointment</a> -->
                    <a href="https://wa.me/0707368352" class="book-doctor" target="_blank">Book Appointment</a>

                </div>
            </div>

            <div class="doctor-card">
                <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=500" alt="Dr. Amanda Peters" class="doctor-image">
                <div class="doctor-info">
                    <h3 class="doctor-name">Dr. Amanda Peters</h3>
                    <p class="doctor-speciality">Gynecologist</p>
                    <p class="doctor-description">Board-certified gynecologist providing comprehensive women's health care, including prenatal care and reproductive health services.</p>
                    <div class="doctor-contact">
                        <span class="contact-item">
                            <i class="fas fa-phone"></i>
                            <p><a href="tel:0762039126">+2540762039126</a></p>
                           
                        </span>
                        <span class="contact-item">
                            <i class="fas fa-envelope"></i>
                <a href="mailto:berrinbendy@gmail.com">berrinbendy@gmail.com</a>
                           
                        </span>
                    </div>
                    <!-- <a href="#" class="book-doctor">Book Appointment</a> -->
                    <a href="https://wa.me/0722465983" class="book-doctor" target="_blank">Book Appointment</a>

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

</body>
</html>
</body>
</html>