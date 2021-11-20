<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <style>
      table {
        width: 300px;
        text-align: center;
      }
      .green {
        background-color: green;
      }
      .red {
        background-color: red;
      }
      .orange {
        background-color: orange;
      }
    </style>
  </head>
  <body>
    <?php
    $k=mt_rand(3,20);
    $a;
    $c;
    $b=1;
    $n=5;
    echo  "<table border=1>
      <tr>
        <td>Номер</td>
        <td colspan=$n>Число</td>
      </tr>";
    for ($i=1; $i <= $k; $i++) {
      if($b==1) $c='green';
      elseif($b==2) $c='red';
      elseif($b==3) $c='orange';
      else {$b=1; $c='green';}
      $b++;
      echo "<tr class=$c><td>$i</td>";
        for ($j=1; $j<= $n; $j++){
          $a=mt_rand(1,60);
          echo "<td>$a</td>";
        }
      echo "</td>";
    }
     ?>
   </table>
  </body>
</html>
