<?php



$username    = "";
$email    = "";
$password    = "";
$phone = "";
$age   = "";
$gender="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '','joblister');

// REGISTER USER
if (isset($_POST['submit']))
 {
  // receive all input values from the form
 
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
   $password = mysqli_real_escape_string($db, $_POST['password']);
    $phone = mysqli_real_escape_string($db, $_POST['phonenumber']);
     $age = mysqli_real_escape_string($db, $_POST['age']);
     $gender=mysqli_real_escape_string($db, $_POST['gender']);

  

  
  $user_check_query = "SELECT * FROM register WHERE email='$email' OR username='$username' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 


     if ($user['username'] == $username) {
      array_push($errors, "username already exists");
       echo"username already exists";
    }
   
    if ($user['email'] == $email) {
      array_push($errors, "email already exists");
       echo"email already exists";
    }

   
  }

   if (count($errors) == 0)
   {

   
         $query = "INSERT INTO register (username,email,password,phonenumber,age,gender) 
          VALUES('$username','$email','$password','$phone','$age','$gender')";
          mysqli_query($db, $query);

          header("Location:login.php");

      
      } 

      else {
        echo "Sorry, there was an error";
      }

  }

?>

 
