<?php
include "./dbconnection/connection.php";

$upit="SELECT DISTINCT year from grades,subjects where grades.subject_id=subjects.ID";
$result=$connection->query($upit);

?>
<div class="center-text">
    <label>Godina:</label>
    <select onchange="selectionChanged(this)">
        <option value="0"></option>

        <?php
        if($result->num_rows>0)
        {
            while($row=mysqli_fetch_assoc($result))
             {
                 ?>
              <option value="<?=$row['year']?>"><?=$row['year']?></option>
               <?php
              }
        }
        ?>

    </select>

</div>