<?php
if(isset($_REQUEST['year']))
{
    session_start();
    $year=$_REQUEST['year'];

    $upit="select name,year,grade from subjects,grades where grades.subject_id=subjects.ID
      and grades.user_id=".$_SESSION['user']['ID'] ;

    if($year!=0)
        $upit.=" and subjects.year=".$year;

       include "../dbconnection/connection.php";

    $result=$connection->query($upit);

    ?>

    <table>
        <tr>
            <th>Predmet</th>
            <th>Godina</th>
            <th>Ocjena</th>
        </tr>



  <?php
    if($result->num_rows>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
          ?>
          <tr>
            <td class="left-text"><?=$row['name']?></td>
            <td><?=$row['year']?></td>
            <td class="prelazakOcjena"><?=$row['grade']?></td>
          </tr>
        <?php

        }
    }
    ?>
    </table>
<?php
}

?>