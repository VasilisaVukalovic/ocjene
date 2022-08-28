<?php
session_start();
if(isset($_SESSION['user']))
{
    header("Location: /index.php");
}
?>
<!doctype html>
    <html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="/css/podesavanja.css">
    <script src="../js/script.js"></script>

</head>
<body>
<?php include "../notification/notification.php";
include "../footer/footer.php";
?>
<div class="login-container">
<h3>II Site</h3>
  <form action="loginCheck.php" method="post" id="idForm">
      <label for="username">Username:</label><br>
      <input type="text" id="username" name="username"><br><br>
      <label for="password">Password:</label><br>
      <input type="password" id="password" name="password"><br><br>
      <input type="submit" value="Login" id="idSubmit">

  </form>
</div>

</body>
   </html>