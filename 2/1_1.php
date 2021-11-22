<!DOCTYPE html>
<html>
  <!--Лучше максимально разделять языки--->
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
    $x = -11;
    if ($x > 0) $class = 'green';
      elseif ($x == 0) $class = 'red';
        else $class = 'yellow';
    ?>
    <p class="<?=$class?>"><?=$x?></p>
  </body>
</html>
