<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<?php include('Header.php'); ?>
 
     

<div class="contact-container">
        <div class="contact-left">
            <div class="contact-info">
                <i class="fas fa-home"></i>  
                <p style="color: #51ccee; font-weight: bold; text-decoration: underline;">Our Branches</p>
            </div>
            <div class="contact-info">
                <i class="fas fa-envelope"></i>
                <p><a href="mailto:info@imentorufoundation.org.za">info@imentorufoundation.org.za</a></p>
            </div>
            <div class="contact-info">
                <i class="fab fa-whatsapp"></i>
                <p><a href="https://wa.me/+27684399291" target="_blank">+27684399291</a></p>
            </div>
            <div class="contact-info">
                <i class="fas fa-phone"></i>
                <p><a href="tel:+27872659927">+27872659927 <br>Call us mon-sat(8am-6pm)</a></p>
            </div>          
        </div>
        <div class="contact-right">
            <h1>Contact Us</h1>
            <form action="./php/addContact.php" method="post">
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" placeholder="enter your name" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" placeholder="enter your email" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="email"> Phone:</label>
                        <input type="text" id="email" name="phone" placeholder="enter your contact number" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="province">Province:</label>
                        <select id="province" name="province" required>
                            <option value="" disabled selected>Select your province</option>
                            <option value="Mpumalanga">Mpumalanga</option>
                            <option value="Gauteng">Gauteng</option>
                            <option value="Eastern Cape">Eastern Cape</option>
                            <option value="Western Cape">Western Cape</option>
                            <option value="Free State">Free State</option>
                            <option value="Limpopo">Limpopo</option>
                            <option value="KwaZulu-Natal">KwaZulu-Natal</option>
                            <option value="Northen Cape">Northen Cape</option>
                            <option value="North West">North West</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="subject">Subject:</label>
                        <input type="text" id="subject" name="subject" placeholder="enter subject" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group-full-width">
                        <label for="description">Description:</label>
                        <textarea id="description" name="message" rows="4" placeholder="enter message" required></textarea>
                    </div>
                </div>
                <button class="btn-send" style="display: flex; align-items: center;justify-content: space-around;">
                   Send Message   <i class="fas fa-paper-plane"></i>                 
                </button>
                
            </form>
        </div>
    </div>

    <footer>
        <div class="footer">
            <div class="footer-items">
                <div class="footer-links">
                    <div class="footer-left">
                        <h4 class="top-title">Get in Touch</h4>
                        
                        <div class="social-media">
                            <a href="#"><i class="fa fa-envelope-open"></i></a>
                            <p><a href="mailto:info@imentorufoundation.org.za">info@imentorufoundation.org.za</a></p>
                        </div>


                        <div class="social-media">
                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                            <p><a href="whatsapp:+27 68 439 9291">+27 68 439 9291</a></p>
                        </div>
                        <div class="social-media">
                            <a href="#"><i class="fa fa-phone"></i></a>
                            <p><a href="tel:+27 87 265 9927">+27 87 265 9927</a></p>
                        </div>
                    </div>

                    <div class="footer-centre">
                        <h4 class="middle-title">Newsletter</h4>
                        <div class="social-media-container">
                            <div class="links">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>

                                <a href="#"><i class="fab fa-facebook-f"></i></a>

                                <a href="#"><i class="fab fa-twitter"></i></a>

                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="footer-right">
                        <h4 class="end-title">Our Branches</h4>
                        <div class="right-paragraph">
                            <p>All Right Reserved 2017-2024 <br>
                               (226-810NPO)/NPC (2019/194097/08) <br>
                               Proud Members of NTiD Group of Companies
                            </p> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        document.querySelector('.menu-icon').addEventListener('click', function() {
            document.querySelector('.nav-links').classList.toggle('active');
        });
    </script>
</body>
</html>

<!-- <nav>      
        <div class="navbar">      
            <div class="logo">
                <img src="images/logo.jpg" alt="logo">
            </div>
                <div class="menu">
                    <a href="home.php">Home</a>
                    <a href="about.php">About us</a>
                    <a href="portfolio.php">Our portfolio</a>
                    <a href="blog.php">Our blog</a>
                    <a href="contact.php">Contact us</a> 
                    <button class="btn-mix">Join us</button>
                </div>
            </nav> 
        </div> -->