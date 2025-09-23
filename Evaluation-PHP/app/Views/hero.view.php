<?php 
require_once(__DIR__ . '/partials/head.php');
?>
    <div class="container">
        <h1><?= $hero['name'] ?></h1>
        <div class="row">
            <div class="col">
                <img src="public/img/<?= $hero['image']?>" alt="Image de <?= $hero['name']?>">
            </div>
            <div class="col">
                <h2>Pouvoir magique :</h2>
                <p><?= $hero['magic_power']?></p>
            </div>
        </div>
        <?php
            if(isset($_SESSION['user']) && $_SESSION['user'] == 'admin'){
                ?>
                <div class="row mt-5">
                    <div class="col">
                        <a href="/edithero?id=<?= $hero['id']?>" class="btn btn-warning d-flex justify-content-center">Modifier</a>
                    </div>
                    <div class="col">
                        <a href="/deletehero?id=<?= $hero['id']?>" class="btn btn-danger d-flex justify-content-center">Supprimer</a>
                    </div>
                </div>
        <?php
            }
        ?>

    </div>
<?php 
require_once(__DIR__ . '/partials/footer.php');
?>
