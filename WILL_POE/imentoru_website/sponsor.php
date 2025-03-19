<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sponsor form</title>

    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<?php include('Header.php'); ?>
    
.
<div class="form-container">
        <h1>Become a Sponsor/Partners</h1>
        <form action="./php/addParner.php" method="post">
            <div class="form-row">
                <div class="form-group">
                    <label for="orgName">Organization Name:</label>
                    <input type="text" id="orgName" name="name" placeholder="enter your organization name" required>
                </div>
                <div class="form-group">
                    <label for="orgWebsite">Organization Website:</label>
                    <input type="url" id="orgWebsite" name="website" placeholder="optional" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="enter your email" required>
                </div>
                <div class="form-group">
                    <label for="contactNumber">Contact Number:</label>
                    <input type="tel" id="contactNumber" name="phone" placeholder="enter your contact" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="partnerPrograms">Which programs would you like to partner/Sponsor?</label>
                    <select id="programs" name="program_interested" required>
                        <option value="" disabled selected>Select a program</option>
                        <option value="education">Education</option>
                        <option value="health">Health</option>
                        <option value="environment">Environment</option>
                        <option value="community">Community Development</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="providePrograms">Province</label>
                    <select id="province" name="province" required>
                        <option value="" disabled selected>Select a province</option>
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
                    <label for="partnerPrograms">Select the type of partnership</label>
                    <select id="programs" name="partnership_type"  required>
                        <option value="" disabled selected>Select a program</option>
                        <option value="Partners">Partners</option>
                        <option value="Sponsors">Sponsors</option>
                        <option value="Both">Both</option>
                    </select>
                </div>
        
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="hearAboutUs">Where did you hear about iMentorU foundation?</label>
                    <select id="hearAboutUs" name="program_found_lead" required>
                        <option value="" disabled selected>Select an option</option>
                        <option value="socialMedia">Social Media</option>
                        <option value="website">Website</option>
                        <option value="friend">Friend/Colleague</option>
                        <option value="event">Event</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="role">What would you like to become in this organization?</label>
                    <select id="role" name="role" required>
                        <option value="" disabled selected>Select a role</option>
                        <option value="partner">Partner</option>
                        <option value="volunteer">Sponsor</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group full-width">
                    <label for="description">Description:</label>
                    <textarea id="description" name="summary" rows="8" placeholder="briefly tell us about your organization, your background and how can we both benefit from the partnership as an organization" required></textarea>
                </div>
            </div>
            <button type="submit" class="btn-submit">Submit</button>
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