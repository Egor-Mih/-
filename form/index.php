<?php
include('config.php');
include('functions.php');


$items = 2;
$page = Page();

try {
    $mysqli = new mysqli(SERVER, USERNAME, PASSWORD, DBNAME);
    if ($mysqli->connect_errno){
        throw new Exception($mysqli->connect_error);
    }
    if (isset($_POST['user']) && isset($_POST['message_text'])){
        $user = $_POST['user'];
        $message_text = $_POST['message_text'];
        $sql = $mysqli->query("INSERT INTO message ('user', 'message_text', 'message_time') value ($user, $message_text, CURRENT_TIMESTAMP)");
    }

    $result = $mysqli->query('SELECT COUNT(1) FROM message');
    $row = mysqli_fetch_row($result);
    $total = $row[0];

    $pagesCount = PagesCount($total, $items);

    $data = Select($items, $page, $mysqli);

    $result->free();
    if (isset($_GET['del'])){
        $sql = $mysqli->query("DELETE FROM message WHERE id = {$_GET['del']}");
    }
    include ('temples\page.php');
    $mysqli->close();
}
catch (Exception $e) {
    $er = $e->getMessage();
    include ('temples\error.php');
}
