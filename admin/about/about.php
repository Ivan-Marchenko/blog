<?php
$user="root";
$password="";
$host="localhost";
$db="testing";
$dbh="mysql:host=".$host.";dbname=".$db.";charset=utf8";
$pdo=new PDO($dbh,$user,$password);
global $pdo;
?>

<?php
if(isset($_POST["save"])){

$list=['.php','.zip','.js','.html'];
     foreach ($list as $item){
         if(preg_match("/$item/",$_FILES['im']['name']))exit("Расширение файла не подходит");
     }
     $type=getimagesize($_FILES['im']['tmp_name']);
     if($type && ($type['mine'] !='image/png' || $type['mine'] !='image/jpg' || $type['mine'] !='image/jpeg' )){
         if($_FILES['im']['name']<1024 * 1000){
             $upload='../img/'.$_FILES['im']['name'];

             if(move_uploaded_file($_FILES['im']['tmp_name'],$upload)) echo "Файл загружен";
             else echo "Ошибка при загрузке файла";


         }
         else exit("Размер файла привышен");
     }
     else exit("Тип файла не подходит");
}
?>


<?php

$title=$_POST["title"];
$description=$_POST["description"];
$sql="UPDATE about SET title=:title,description=:description,filename=:filename";
$query=$pdo->prepare($sql);
$query->execute(["title"=>$title,"description"=>$description,"filename"=>$_FILES['im']['name']]);
echo '<meta HTTP-EQUIV="Refresh" Content="0; URL=/admin/about.php">';
?>

