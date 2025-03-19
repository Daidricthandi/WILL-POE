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
  
<style>
 
    


 .title {
   text-align: center;
   font-size: 24px;
   font-weight: bold;
   color: #04c8dc;
   margin-bottom: 20px;
 }
 .inputfield{
   display:flex;
   flex-direction:column;
   max-width:300px;
   width: 100%;
   margin:7px;
 }

 .inputfield label {
   margin-bottom: 5px;
   font-weight: 500;
   font-size: 12px;
 }


 .inputfield  .input,
 .inputfield .textarea, 
 .inputfield select {
   width: 100%;
   padding: 5px;
   border: 1px solid #ccc;
   padding:8px;
   width:100%;
   border-radius: 4px;
   font-size: 12px;
 }


 .btn {
   padding: 10px;
   background: #04c8dc;
   color: #fff;
   border: none;
   border-radius: 4px;
   cursor: pointer;
   text-align: center;
   font-size: 16px;
   width: 100%;
   display: block;
   margin: 0 auto;
 }

 .btn:hover {
   background: #039db7;
 }


</style>
<body>

<?php include('Header.php'); ?>


<div class="wrapper-box">
    <form action="./php/subscribe.php" method="post" style="
    display: block;max-width:300px;width:100%">
    <div class="inputfield">
        <label>Email</label>
        <input type="text" name="email" placeholder="enter your email" required>
      </div>
      <div class="inputfield">
        <input type="submit" value="Submit" class="btn_submit">
      </div>
      </form>
  </div>
   

    
        <?php include('footer.php'); ?>

    <script>
        
        document.querySelector('.menu-icon').addEventListener('click', function() {
            document.querySelector('.nav-links').classList.toggle('active');
        });
    </script>
            
            
</body>
</html>
