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
    <table border = 1>
      <tr>
        <td>Номер</td>
        <td>Число</td>
      </tr>
    <?php
    $k=mt_rand(3,20);

    for ($i = 1, $b = 1; $i <= $k; $i++, $b++) {
      $a=mt_rand(1,60);
      if ($b > 3) $b = 1;
      if ($b == 1) $c = 'green';
      elseif ($b == 2) $c = 'red';
      else $c = 'orange';
      echo "<tr class=$c><td>$i</td><td>$a</td></tr>";
    }
     ?>
   </table>
  </body>
</html>
