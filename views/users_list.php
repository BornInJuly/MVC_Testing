<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Список пользователей:<h1>
    <?php
    foreach($users as $user) {
        echo '<h3>'.$user['login'].'</h3>';
        echo '<a href="user_page.php?id='.$user['user_id'].'">Ссылка на профиль:<a>';
    }
    ?>
</body>
</html>