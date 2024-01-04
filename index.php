<?php require 'public/contact.php'?>
<?php
require_once './functions/connect.php';
global $pdo;
     $main= $pdo->prepare("SELECT * From header ");
     $main->execute();
     $result=$main->fetch(PDO::FETCH_OBJ);
     ?>
<div class="intro-section" style="background-image: url('/admin/img/<?php echo $result->filename?>');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
              <h1><?php echo $result->name?></h1>
            </div>
          </div>
        </div>
      </div>
<?php require 'public/uslugi.php'?>
<?php require 'public/about.php'?>
<?php require 'public/footer.php'?>
