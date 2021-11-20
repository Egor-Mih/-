<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <style>
      .green {
        color: green;
      }
      .red {
        color: red;
      }
      .yellow {
        color: yellow;
      }
    </style>
  </head>
  <body>
    <?php
    $x=1;
    if ($x>=1)
      echo "<p class=green>$x</p>";
      elseif ($x==0)
        echo "<p class=yellow>$x</p>";
        elseif ($x<=-1)
          echo "<p class=red>$x</p>";
    ?>
  </body>
</html>
