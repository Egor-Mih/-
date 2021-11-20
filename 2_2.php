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
    <table border="1">
      <tr>
        <td>Номер</td>
        <td>Число</td>
      </tr>
    <?php
    $k=mt_rand(3,200);
    $a;
    $c=0;

    for ($i=1; $i <= $k; $i++) {
      $a=mt_rand(1,60);
      echo "<tr style=background-color:rgb($c,$c,$c)><td>$i</td><td>$a</td></tr>";
      $c=$c+round(255/$k);
    }
     ?>
   </table>
  </body>
</html>
