<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<?php include('Header.php'); ?>

    <div class="banner-wrap">
           
             <!-- <hr class="horizontal-line"> -->

        <div class="wrap-container">
                <h3 style="font-size:40px;">Youth Development & Mentorship</h3>
                <p style="max-width:600px;font-size:22px;letter-spacing:1.4px">We aim to be the most leading mentoring, influential 
                   and inspiring organinization globally, to have the best 
                   impact on youths across the globe, by providing the
                   unique youth development & mentorship programmes 
                   teaching, changing, inspiring and empowering youths and 
                   communities are some of our key objectives, to ensure that 
                   everyone is...<p>
                    
           <div class="actions-area">
                <a  href="Menteeform.php" class="btn-mix">Join us</a>
                <a href="about.php" class="btn-light">Learn more</a>
                <a href="newsletter.php"  class="btn-dark">Subscribe</a>  
            </div>
        </div>
   

    
        <?php include('footer.php'); ?>

            
        <script>
        document.querySelector('.menu-icon').addEventListener('click', function() {
            document.querySelector('.nav-links').classList.toggle('active');
            document.querySelector('.body').classList.toggle('no-scroll');
        });
    </script>
</body>
</html>
