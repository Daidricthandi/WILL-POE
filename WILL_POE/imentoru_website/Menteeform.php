<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Become a Mentee</title>
  
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
      font-weight: 400;
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
</head>
<body>
  <?php include('Header.php'); ?>

  <div class="wrapper-box">
      <a href="MentorsForm.php">Become a Mentor</a>
      <a href="sponsor.php">Become a Partner/Sponsor</a>
    </div>

  <div class="wrapper">
    <div class="title">
      Become a Mentee
    </div>
    <form action="./php/addMentee.php" method="post" class="wrapper-box">
        <div class="inputfield">
          <label>Firstname</label>
          <input type="text" name="first_name" required>
        </div>

        <div class="inputfield">
          <label>Lastname</label>
          <input type="text" name="last_name" required>
        </div>
      <div class="inputfield">
        <label>Email</label>
        <input type="email" name="email" required>
      </div>
      <div class="inputfield">
        <label>Contact Number</label>
        <input type="text" name="phone" required>
      </div>
      <div class="inputfield">
        <label>Position you are applying for</label>
        <input type="text" name="vacant_application" required>
      </div>
      <div class="inputfield">
        <label>ID or Passport Number</label>
        <input type="text" name="id_number" required>
      </div>
      <div class="inputfield">
        <label>Your Region</label>
        <div class="select-wrapper">
          <select name="province" required>
            <option value="">Select your region</option>
            <option value="Gauteng">Gauteng</option>
            <option value="KwaZulu-Natal">KwaZulu-Natal</option>
            <option value="Limpopo">Limpopo</option>
            <option value="Mpumalanga">Mpumalanga</option>
            <option value="Free State">Free State</option>
            <option value="North West">North West</option>
            <option value="Western Cape">Western Cape</option>
            <option value="Eastern Cape">Eastern Cape</option>
            <option value="Northern Cape">Northern Cape</option>
            <option value="Other Country">Other Country</option>
          </select>
        </div>
      </div>  
      <div class="inputfield">
        <label>Specify your village or nearest town</label>
        <input type="text" name="town_village" required>
      </div>  
      <div class="inputfield">
        <label>Gender</label>
        <div class="select-wrapper">
          <select name="gender" required>
            <option value="">Select your gender</option>
            <option value="male">male</option>
            <option value="female">female</option>
            <option value="other">other</option>
       
          </select>
        </div>
  </div>
      <div class="inputfield">
        <label>Your Home Language</label>
        <div class="select-wrapper">
          <select name="Home_Language" required>
            <option value="">Select your home language</option>
            <option value="English">English</option>
            <option value="Zulu">Zulu</option>
            <option value="Tswana">Tswana</option>
            <option value="Afrikaans">Afrikaans</option>
            <option value="Xhosa">Xhosa</option>
            <option value="Southern Sotho">Southern Sotho</option>
            <option value="Northern Sotho">Northern Sotho</option>
            <option value="Tsonga">Tsonga</option>
            <option value="Venda">Venda</option>
            <option value="Swati">Swati</option>
            <option value="Ndebele">Ndebele</option>
          </select>
        </div>
      </div>  
      <div class="inputfield">
        <label>Have you previously benefited from the MentorU Foundation programs?</label>
        <div class="select-wrapper">
          <select>
            <option value="no">No</option>
            <option value="yes">Yes</option>
          </select>
        </div>
      </div>  
      <div class="inputfield">
        <label>What do you currently do?</label>
        <input type="text" name="occupation" required>
        </div> 
      <div class="inputfield">
        <label>Where did you hear about MentorU Foundation?</label>
        <div class="select-wrapper">
          <select  name="program_found_lead" required>
            <option value="">Select an option</option>
            <option value="Radio">On the Radio </option>
            <option value="Social Media">Through Social media</option>
            <option value="Internet (browsing)"> Internet (browsing)</option>
            <option value="Other">Other</option>
          </select>
        </div>
      </div>  
      <div class="inputfield">
        <label>Select Programs you wish to be part of?</label>
        <div class="select-wrapper">
          <select  name="program_interest" required>
            <option value="">Select an option</option>
            <option value="Career Mentorship">Career Mentorship</option>
            <option value="Community Service Support">Community Service Support</option>
            <option value="Learning Language">Learning Language</option>
            <option value="Educational Support">Educational Support</option>
            <option value="STEMA Education">STEMA Education</option>
            <option value="Sports & Recreation">Sports & Recreation</option>
          </select>
        </div>
      </div>    
      <div class="inputfield">
        <label>Have you previously benefited from the MentorU Foundation programs?</label>
        <div class="select-wrapper">
          <select name="benefited_already" required>
            <option value="">Select an option</option>
            <option value="no">No</option>
            <option value="yes">Yes</option>
          </select>
        </div>

      </div>  
   

      <div class="inputfield">
        <label>Tell us about yourself and What do you wish to achieve through the program and how will you achieve it? Please specify the way you will apply the skills acquired.</label>
        <textarea class="textarea" name="summary" required rows="8"></textarea>
      </div>  
  </div>
  <div class="wrap-container">
  <div class="inputfield">
        <input type="submit" value="Submit" class="btn_submit">
      </div>
      </form>
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
