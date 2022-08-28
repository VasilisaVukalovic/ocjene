<?php
session_start();
if(!isset($_SESSION['user']))
{
    header("Location: /login/login.php");
}
?>
<!doctype html>
 <html>
<head>
    <title>Index</title>
    <link rel="stylesheet" href="/css/podesavanja.css">
    <script src="/js/script.js"></script>

</head>
<body>
<?php include "./header/header.php" ;
include './components/yearSelect.php';
include "./footer/footer.php";
?>
<div class="center-text" id="gradesTable">
</div>



</body>
 </html>