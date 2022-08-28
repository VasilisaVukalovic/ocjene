<style>
    <?php  include "../notification/notification.css"; ?>
</style>
<?php
if(isset($_COOKIE['error-notification']))
{

   ?>
<div class="notice">
    <?=$_COOKIE['error-notification']?>
</div>
<?php
    setcookie("error-notification","",time()-10,"/");
}


if(isset($_COOKIE['succes-notification']))
{

    ?>
    <div class="succes">
        <?=$_COOKIE['succes-notification']?>
    </div>
    <?php
    setcookie("succes-notification","",time()-10,"/");
}
?>