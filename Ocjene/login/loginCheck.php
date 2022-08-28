<?php
session_start();
include "../dbconnection/connection.php";
if(isset($_REQUEST['username']) && isset($_REQUEST['password']))
{
    $username=$_REQUEST['username'];
    $password=$_REQUEST['password'];

    echo $username.$password;

$upit="SELECT * FROM `users` WHERE username='".$username."' and password='".md5($password)."'";
$result=$connection->query($upit);

    var_dump($result);

 if($result->num_rows>0)
 {

     $user=mysqli_fetch_assoc($result);
     $_SESSION['user']=$user;
     header("Location: /index.php");

 }
  else
  {
      setcookie("error-notification","Login failed. Wrong username or password!",time()+(60*60*24),"/");
      header("Location: /login/login.php");

  }



}
else
{
    echo "EROR";
    header("Location: /login/login.php");
}

?>