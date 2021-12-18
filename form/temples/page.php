<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <title>page</title>
</head>
<body>
<h2>Страница <?= $page ?></h2>
<div>
    <?php foreach ($data as $row) {
        echo "<p> $row[user] - $row[message_text] ($row[message_time]) <a href='?del={$row['id']}'>Удалить</a></p>";}
        ?>
</div>
<form method="POST" action="">
    <input name="user" type="text" placeholder="Имя">
    <input name="message_text" type="text" placeholder="Текст">
    <input type="submit" value="Отправить">
</form>
<div class="Links">
    <?= LinkList($pagesCount, 'page');?>
</div>
</body>
</html>
