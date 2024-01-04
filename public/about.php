<?php
require_once './functions/connect.php';
global $pdo;
$row= $pdo->prepare("SELECT * From about ");
$row->execute();
$about=$row->fetch(PDO::FETCH_OBJ);
?>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="/admin/img/<?php echo $about->filename?>" class='img-fluid'>
            </div>
            <div class="col-md-6">

                <h3 style="color: black"><?php echo $about->title?></h3>
                <P><?php echo $about->description?></P>
            </div>
        </div>
    </div>
</div>
