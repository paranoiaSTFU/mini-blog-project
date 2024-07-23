<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Сообщение отправленно</title>
</head>
<body>
<h1>Мини блог</h1>
<h2>Результаты отправки сообщения</h2>
<?php
$Title = $_REQUEST['title-message'];
$Massage = $_REQUEST['text-message'];
$DateTimeSendMassage = date('Y-m-d H:i:s');
if ((!isset($Title)) || (!isset($Massage))) 
{
echo '<p>Вы не указали все данные для отправки сообщения. Повторите ввод сообщения.';
echo '<p><a href="Index.php">Вернуться к блогу</a>';
echo '</body></html>';
exit;
}
//подключение к бд
$con_str = new mysqli('localhost', 'root', 'root', 'mini_blog');
if($con_str->connect_error){
    echo '<p><a href="index.php">Вернуться к блогу</a>';
    die("Ошибка: " . $conn->connect_error);
}

$query = "INSERT INTO post (title, content, created_at) VALUES ('$Title', '$Massage', '$DateTimeSendMassage')";

if($con_str->query($query)){
    echo "Данные успешно добавлены";
    echo '<p><a href="index.php">Вернуться к блогу</a>';
} else{
    echo "Ошибка: " . $con_str->error;
    echo '<p><a href="index.php">Вернуться к блогу</a>';
}
$con_str->close();
?>
</body>
</html>