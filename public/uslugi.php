<?php
require_once './functions/connect.php';
global $pdo;

$bim= $pdo->prepare("SELECT * From post ");
$bim->execute();
$uba=$bim->fetchAll(PDO::FETCH_OBJ);
?>

<div class="site-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center">

                <h3 style="color: black">Посты</h3>
            </div>
        </div>
        <div class="row">


            <?php foreach ($uba as $yba):?>
            <div class="col-lg-3 col-md-6 mb-lg-0">
                <div class="person">
                    <figure>
                        <img src="/admin/img/<?php echo $yba->filename?>" class="img-fluid">

                    </figure>
                    <div class="person-contents">
                        <h3><?php echo $yba->title?></h3>
                        <span style="color: #000000;font-weight: bold"><?php echo $yba->price?></span>
                    </div>
                </div>
            </div>
            <?php endforeach?>





        </div>
    </div>
</div>
