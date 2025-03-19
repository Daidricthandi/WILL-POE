<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog</title>
    <style>
        .button-container {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }

        

        .All-button {
            background-color: blue;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 25px;
        }
        .Career-button {
        background-color: grey;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 25px;
        }
        .Education-button {
     background-color: grey;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 25px;
        }

        .Sports-button {
        background-color: grey;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 25px;
        }

        .image-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: flex-start;
            margin: 20px 0;
        }

        .image-container div {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 10px;
            width: 30%;
            box-sizing: border-box;
        }

        .image {
            width: 100%; 
            height: auto;
            border-radius: 0px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        p {
            text-align: center;
            margin: 10px 0 0 0;

        }
        .bold-text {
  font-weight: bold;
}


        .description {
            text-align: center;
            margin: 5px 0;
        }
    </style>
</head>
<body>

<?php include('Header.php'); ?>


    <div class="image-container">
        <div>

       

            <img src="images/kids.jpg" alt="Education Support" class="image">
            
            
            <p class="bold-text">Education Support</p>  <p class="description">We had the amazing time with learners who were happy to learn more. #Spelling_Bee and #Life_skills with us….</p>
        </div>
        <div>
            <img src="images/kids.jpg" alt="Education Support" class="image">
            
            <p class="bold-text">Education Support</p>  <p class="description">We had the amazing time with learners who were happy to learn more. #Spelling_Bee and #Life_skills with us….</p>
        </div>
        <div>
            <img src="images/kids.jpg" alt="Education Support" class="image">
            
            <p class="bold-text">Education Support</p> <p class="description">We had the amazing time with learners who were happy to learn more. #Spelling_Bee and #Life_skills with us….</p>
        </div>
    </div>

    <?php include('footer.php'); ?>
    <script>
        document.querySelector('.menu-icon').addEventListener('click', function() {
            document.querySelector('.nav-links').classList.toggle('active');
        });
    </script>
</body>
</html>
