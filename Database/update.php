<!DOCTYPE html>
<html>
   <head>
    <title>Update information</title>
       <link rel="stylesheet" href="style.css">
       <?php include 'links/link.php' ?>
    </head>
<body>
    <div class="fresh">

        <div class="sign-up-form">
            <form method= "POST">
               <input type="text" name="user_name" class="input-box" placeholder="Enter New Username" required>
               <br>
               <input type="email" name="user_email" class="input-box" placeholder="Enter New Email ID" required>
               <br>
               <input type="score" name="user_score" class="input-box" placeholder="Enter New Score" required>
               <br>
               <input type="checkbox"><span>I Agree to the Terms and Conditions.</span>
               <br>
               <button type="submit" name="update" class="signup-btn">Update Now</button>
               <br>
            </form>      
        </div>
    
    </div>

<?php

include 'dbcon.php';

if(isset($_POST['update'])){

    $id = $_GET['id'];
    $username = $_POST['user_name'];
    $useremail = $_POST['user_email'];
    $score = $_POST['user_score'];
    $q = "UPDATE register_user SET id = '$id', user_name = '$username', user_email = '$useremail', user_score = '$score' WHERE id = '$id' ";

    $query = mysqli_query($conn, $q);
    if($query){
        echo '<script type = "text/javascript"> alert("Update Successful") </script>';
        header('location: leaderboard.php');
    }else{
        echo '<script type = "text/javascript"> alert("Update Failed") </script>';
    }

    
    
}
?>
  
    </body>
</html>