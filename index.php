<?php

$con=mysqli_connect("localhost","root","","project1");



if ($_SERVER["REQUEST_METHOD"] == "POST") 

{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $feed=$_POST['feedback'];
    $sugg=$_POST['suggestion'];
    
               
   
          
$query="INSERT INTO `db1`(`name_`, `email_`, `feedback_`, `suggestion_`) VALUES ('$name', '$email','$feed','$sugg')";


if(mysqli_query($con,$query))
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo  "$email is not a valid email address" ;
      }
    else{
        echo "Data inserted";
        header("Location:index_firstpage.php");
    }
    
}

else {
    echo "Not";

}
}
else {
    echo "Not conntected";
}


?>