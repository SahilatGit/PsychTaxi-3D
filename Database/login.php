<?php

session_start();

?>

<html>
   <head>
    <title>PsychTaxi - Leaderboard</title>
       <link rel="stylesheet" href="style.css">
       <?php include 'links/link.php' ?>
   </head>
   <body>

   <?php

   include 'dbcon.php';

   if(isset($_POST['login'])){
      $email = $_POST['user_email'];
      $password = $_POST['user_password'];

      $email_search = "select * from register_user where user_email='$email' ";
      $query = mysqli_query($conn, $email_search);

      $email_count = mysqli_num_rows($query);

      if($email_count){
         $email_pass = mysqli_fetch_assoc($query);

         $db_pass = $email_pass['user_password'];

         $_SESSION['username'] = $email_pass['user_name'];

         $pass_decode = password_verify($password, $db_pass);
         

         if($pass_decode){
            echo "Login Successful";
            ?>
            <script>
               location.replace("leaderboard.php");
            </script>
            <?php
         }else{
            echo "Password Incorrect";
         }

      }else{
         echo "Invalid Email";
      }
   }
?>



   <div class="fresh">

      <div class="sign-up-form">
    
      <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method= "POST">
       <input type="email" name="user_email" class="input-box" placeholder="Enter Email ID" required>
       <br>
       <input type="password" name="user_password" class="input-box" placeholder="Enter Password" required>
       <br>
       <input type="checkbox"><span>I Agree to the Terms and Conditions.</span>
       <br>
       <button type="submit" name="login" class="signup-btn">Log in</button>
       <br>
        <p>Don't have an account ? <a href="index.php">Register!</a></p>
      </form>      
   
      </div>

   </div>
   
   </body>
</html>