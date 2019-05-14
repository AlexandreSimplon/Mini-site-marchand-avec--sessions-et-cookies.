<?php require_once ("include/header.php") ?>

<div class="container articlespageprincipale">
    <div class="row linge center">
        <h1 class="titre1">Les plus vendus</h1>
    </div>
</div>



<div class="container center">
    <div class="row linge">
            <div class="col s3 divarticle">

            <!-- faire une boucle PHP -->

                <div>
                    <h6><title><?php echo $Marque ?></title><?php echo $Model ?></h6>
                    <img src="<?php echo $Images ?>" alt="<?php echo $Description_img ?>">
                    <h6><u>Prix :</u> <b><?php echo $Prix ?></b><strong class="euros">€</strong></h6>
                </div>
            </div>

            <!-- -_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_ -->


            <!-- <?php
            // $reponse = $bdd->query('SELECT * FROM Articles');

            // On affiche chaque entrée une à une
            // while ($donnees = $reponse->fetch()){

            // echo"";}
            ?> -->







            <div class="col s3 divarticle">2</div>
            <div class="col s3 divarticle">3</div>
            <div class="col s3 divarticle">4</div>
    </div>
</div>












<div class="container articlespageprincipale">
    <div class="row linge center">
        <h1 class="titre1">Promotions</h1>
    </div>
</div>





<div class="container center">
    <div class="row linge">
            <div class="col s3 divarticle">

            <!-- faire une boucle PHP -->

                <div>
                    <h6><title><?php echo $Marque ?></title><?php echo $Model ?></h6>
                    <img src="<?php echo $Images ?>" alt="<?php echo $Description_img ?>">
                    <h6><u>Prix :</u> <b><?php echo $Prix ?></b><strong class="euros">€</strong></h6>
                </div>
            </div>

            <!-- -_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_ -->






            <div class="col s3 divarticle">2</div>
            <div class="col s3 divarticle">3</div>
            <div class="col s3 divarticle">4</div>
    </div>
</div>







<?php require_once ("include/footer.php") ?>