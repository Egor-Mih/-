<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/template/style.css">
    <title>page</title>
</head>
<body>
<div class="Content">
  <h2>Страница <?= $page ?></h2>
    <div class="Text">
       <?
      foreach ($endtext as $i){
          echo "<p>$i</p>";
        }
       ?>
    </div>
    <div class="Itegration">
        <?php
            for ($i = 0; $i < $countParagraph; $i++){
               echo "<div>
                        <p>Количество символов______".$info[$i][0]."</p>
                        <p>Количество слов__________".$info[$i][1]."</p>
                        <p>Количество предложений___".$info[$i][2]."</p>
                    </div>";
            }
        ?>
    </div>
    <div class="Links">
        <?= LinkList($pagesCount, 'page');
        ?>
    </div>
</div>

</body>
</html>
