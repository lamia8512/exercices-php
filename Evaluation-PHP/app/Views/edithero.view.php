<?php
require_once (__DIR__ . '/partials/head.php');
?>  
    <h1>Modifier HERO</h1>
    <form method="POST">
        <div class="container">
            <div class="form-group">
                <label for="name" class="form-label">Nom de ton HERO:</label>
                <input type="text" name="name" id="name" placeholder="Samsam !" value="<?= $hero['name'] ?>" class="form-control">
                <?php
                if(isset($arrayError['name'])){
                    ?>
                    <p class="text-danger"><?= $arrayError['name']?></p>
                    <?php
                }
                ?>
            </div>
            <div class="form-group">
                <label for="power" class="form-label">Le pouvoir de ton HERO:</label>
                <input type="text" name="power" id="power" value="<?= $hero['power'] ?>" class="form-control">
                <?php
                if(isset($arrayError['power'])){
                    ?>
                    <p class="text-danger"><?= $arrayError['power']?></p>
                    <?php
                }
                ?>
            </div>
            <div class="form-group">
                <label for="image" class="form-label">Nom de l'image :</label>
                <input type="text" name="image" id=""  value="<?= $hero['image'] ?>" class="form-control">
                <?php
                if(isset($arrayError['image'])){
                    ?>
                    <p class="text-danger"><?= $arrayError['image']?></p>
                    <?php
                }
                ?>
            </div>
            <button type="submit" class="btn btn-warning mt-5">Modifier le HERO !</button>
        </div>
    </form>
<?php
require_once (__DIR__ . '/partials/footer.php');