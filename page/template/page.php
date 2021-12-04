<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>page</title>
</head>
<body>
    <div>
       <?
      foreach ($pageContent as $i){ 
          echo '<p>'.Colorise($i).'</p>'; 
        } 
       ?>
    </div>
    <div>
        <?= var_dump (PageInfo($pageContent));?>
    </div>
    <div>
        <?= LinkList($pagesCount, 'page');
        ?>
    </div>
</body>
</html>

