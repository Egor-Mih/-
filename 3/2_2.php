<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <style>
      table {
        width: 300px;
        text-align: center;
        color: red;
      }
    </style>
  </head>
  <body>
    <table border = "1">
      <tr>
        <td>Номер</td>
        <td>Число</td>
      </tr>
    <?php
    $k = mt_rand(3,200);
    $c = 0;
    $b = 0;
    $step = (255 / ($k-1));

    for ($i = 1; $i <= $k; $i++) {
      $a=mt_rand(1,60);
      echo "<tr style=background-color:rgb($b,$b,$b)><td>$i</td><td>$a</td></tr>";
      $c = ($c + $step);
      $b = round($c);
    }
     ?>
   </table>
  </body>
</html>
