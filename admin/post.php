<?php
global $pdo;
session_start();?>
<?php require_once '../functions/connect.php';
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"
</head>
<body>
<div style="text-align: center">
    <h1>Редактирование Постов</h1>
    <?php if(!empty($_SESSION["login"])):?>

        <?php echo "Вы в админке ".$_SESSION['login']; ?>
        <br>
        <a href="/logout.php">Выйти</a>
        <br>
        <?php
        $sql=$pdo->prepare("SELECT * FROM post");
        $sql->execute();
        while($res=$sql->fetch(PDO::FETCH_OBJ)):?>

            <form action="/admin/post/post.php/<?php echo $res->id?>" method="post" enctype="multipart/form-data">
                <?php echo $res->id?><br>
                <input type="text" name="title" value="<?php echo $res->title?>">
                <input type="text" name="price" value="<?php echo $res->price?>">
                <p>
                    <input type="file" name="im">
                </p>

                <input type="submit" name="save" value="Сохранить">
            </form>
            <br>
            <img src="/admin/img/<?php echo $res->filename?>" width="300">

        <?php endwhile?>

    <?php else:
        echo '<h2>Вы что хакер?</h2>';
        echo '<a href="/">На главнную</a>';
        ?>

    <?php endif?>
</div>
</body>
</html>