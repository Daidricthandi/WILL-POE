<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <style>
        .container {
            display: flex;
            justify-content: center; 
            align-items: center; 
            height: 90vh;
            flex-direction: column; 
        }

        .boxes {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: -5px; 
        }

        .box {
            width: 70px;
            height: 70px;
            font-size: 1em;
            text-align: center;
            border-radius: 15px;
            border: 2px solid #04c8dc;
            background-color: white;
            margin: 10px;
            display: flex;
            flex-direction: column; 
            justify-content: center; 
        }

        .box p {
            margin: 0; 
            font-size: 0.5em; 
        }

        .carousel-container {
            max-width: 700px; 
            overflow: hidden;
            position: relative;
           padding:10px
        }

        .carousel {
            display: flex;
            transition: transform 0.5s ease;
        }

        .carousel img {
            width: 100%;
            height: 400px;
        }

        .carousel-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            border: none;
            outline: none;
            background:transparent !important;
            cursor: pointer;
            z-index: 2;
            font-size:40px;
            color: #04c8dc;
        }

        .carousel-btn.prev {
            left: -110px;
        }

        .carousel-btn.next {
            right: -110px;
        }
    </style>
</head>

<body>

<?php include('Header.php'); ?>

    <div class="wrapper-box">
            <div class="box_p">
                <div>80+</div>
                <p>Mentors</p>
            </div>
            <div class="box_p">
                <div>17+</div>
                <p>Partners</p>
            </div>
            <div class="box_p">
                <div>2498+</div>
                <p>Beneficiaries</p>
            </div>
            <div class="box_p">
                <div>9+</div>
                <p>Provinces</p>
            </div>
            <div class="box_p">
                <div>2+</div>
                <p>Countries</p>
            </div>
        </div>
        <div class="wrap-container">

        <div class="carousel-container">
            <div class="carousel">
                <img src="images/kids.jpg" alt="Education Support" class="image">
                
                <img src="images/matric.jpg" alt="matric" class="image3">

                <img src="images/mckenzie.jpg" alt="mckenzie" class="image4">
                
                <img src="images/imentorufootball.jpg" alt="football" class="image6">

                <img src="images/kids.jpg" alt="Education Support" class="image">
            </div>
            <button class="carousel-btn prev" onclick="prevSlide()"><i class="fas fa-chevron-left"></i></button>
             <button class="carousel-btn next" onclick="nextSlide()"><i class="fas fa-chevron-right"></i></button>
          </div>
        </div>
    </div>

    <script>
        let slideIndex = 0;

        function showSlide(index) {
            const slides = document.querySelectorAll('.carousel img');
            if (index >= slides.length) {
                slideIndex = 0;
            } else if (index < 0) {
                slideIndex = slides.length - 1;
            }
            const offset = -index * 100;
            slides.forEach(slide => {
                slide.style.transform = `translateX(${offset}%)`;
            });
        }

        function nextSlide() {
            slideIndex++;
            showSlide(slideIndex);
        }

        function prevSlide() {
            slideIndex--;
            showSlide(slideIndex);
        }

        showSlide(slideIndex);
    </script>

<?php include('footer.php'); ?>
<script>
        document.querySelector('.menu-icon').addEventListener('click', function() {
            document.querySelector('.nav-links').classList.toggle('active');

        });
    </script>
</body>
</html>
