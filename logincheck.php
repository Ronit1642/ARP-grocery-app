<?php
if(!isset($_POST['signin'])) 
{
 $username=$_POST['username'];
 $password=$_POST['password'];
 $con=mysqli_connect("localhost","root","","grocery");
 $sql="SELECT * FROM login Where username='$username' AND pass='$password'";
 
 $result=mysqli_query($con,$sql);
 $resultcheck=mysqli_num_rows($result); 
 if($resultcheck>0)
 {
  echo "Login Success";
 }
 else
{
 echo"username or password incorrect";
 
} 
header('Location: http://www.google.com/');



} 




?>