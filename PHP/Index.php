<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Index.css">
    <title>Мини блог</title>
</head>
<body>
    <header>
        <div>
            <img name="logo" src="../IMG/Icon.png">
        </div>
        <div>
            Мини блог
        </div>
    </header>
    <section>
        <div name="content-blog" class="ContentBlog">
            <?php
                $connect = mysqli_connect("localhost", "root", "root", "mini_blog");
                    if (!$connect) {
                        die("Ошибка: " . mysqli_connect_error());
                    }
                    $query = "SELECT * FROM post";
                    if($result = mysqli_query($connect, $query)){
     
                        $rowsCount = mysqli_num_rows($result); // количество полученных строк
                        echo "<div style = 'border: 1px solid black;'>";
                        foreach($result as $row){
                            echo "<div style = 'border: 1px solid black;'> Название поста: " . $row["title"] ."<br>Текст поста: " . $row["content"] . "<br>Дата создания: " . $row["created_at"]. "</div>";
                        }
                        echo "</div>";
                        mysqli_free_result($result);
                        } else{
                        echo "Ошибка: " . mysqli_error($connect);
                        }
                        mysqli_close($connect);
?>
        </div>
        <div name="send-message">
            <form name="send-message-form" class="SendMessageForm" action="SendMassage.php" method="post">
                <div>
                    <input name="title-message" type="text" placeholder="Введите заголовок сообщения"/>
                    <input name="text-message" type="text" placeholder="Введите текст сообщения"/>
                </div>
                <div>
                    <button name="btn-send-message" type="submit">Отправить</button>
                </div>
            </form>
        </div>
    </section>
    <footer>
        <div>
            Мои контакты: <a href="https://web.telegram.org/a/"> Telegram </a>
        </div>
    </footer>
</body>
</html>