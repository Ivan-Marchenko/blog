<?php
session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"
    </head>
<body>
<div style="text-align: center">
<?php if(!empty($_SESSION["login"])):?>

<?php echo "Вы в админке ".$_SESSION['login']; ?>
    <br>
    <a href="/logout.php">Выйти</a>
    <br>
    <a href="/admin/contact.php">Контакты</a>
    <a href="/logout.php">Хэдэр</a>
    <a href="/admin/post.php">Посты</a>
    <a href="/admin/about.php">Обо мне</a>
    <?php else:
    echo '<h2>Вы что хакер?</h2>';
    echo '<a href="/">На главную</a>';
    ?>

<?php endif?>
</div>
</body>
</html>


