<?php
   

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'joblister');

if (!$db){
    echo "There was an error". mysqli_connect_errno();
}

 
if (isset($_POST['submit2']))
 {

   $username = mysqli_real_escape_string($db, $_POST['username2']);
   $password = mysqli_real_escape_string($db, $_POST['password2']);
   

      $sql="SELECT * FROM register WHERE username='$username' LIMIT 1";
     

      $result = mysqli_query($db,$sql) or die("Error");

        if (mysqli_num_rows($result) > 0)
        {

           while($row = mysqli_fetch_assoc($result)) 
            {
              if($password==$row['password'])
              {
 		               header("Location:index1.html");
              }
              else
              {
                echo "Sorry!!! your password dosen't matches";
              }
            }
        }
        else
        {
          echo "Sorry you entered wrong email id ";
        }
    
}

?>

 
