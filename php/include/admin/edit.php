<?php
include_once("header.php");
session_start();
require('connexion.php');




if(empty($_SESSION)) {
    echo "<h5 class='center titre5'>Vous n'êtes pas connecté ! </h5><a href='login.php'>Se connecter</a>";
} else if($_SESSION['idrole'] == 2 ) {
    echo "<h5 class='center titre5'>Vous êtes un menbre inscrit</h5>";
} else if ($_SESSION['idrole'] == 1) {
    echo "<h5 class='center titre5'>Vous êtes administrateur </h5>";  
    $req = $bdd->query("SELECT * FROM articles");
    $donnees = $req->fetchAll();
    // $titre = $donnees['titre'];
    // $desc = $donnees['description'];
    // $image = $donnees['image']; 
?>


<?php 

foreach ($donnees as $key => $value) {
    // echo $value['titre'];
?>
    <form action="update.php" method='post'>
        <div class="container center connexionphp">
            <div class="input-field col s6">
                <label for='titre'>Titre : </label>
                <input type="text" name="titre" value="<?php echo $value['titre']; ?>">
            </div>
            <div class="input-field col s6">
                <label for='description'>Description : </label>
                <textarea class="textarea1" name="description"><?php echo $value['description']; ?></textarea>
            </div>
            <div class="input-field col s6">
                <input type="submit" class='btn btn-primary' name='update' value='Update'>
                <input type="submit" class="btn btn-danger" value="Supprimer" name="delete">
                <input type="hidden" value="<?php echo $value['id']; ?>" name="id">
            </div>
        </div>
    </form>
<?php
}

?>


<h2 class="titre1 center">Ajouter un article</h2>

    <form class="forumAZERTY" action="update" method="post" enctype="img">
        <div class="container center connexionphp">
            <div class="input-field col s6">
                <label for="titre">Titre : </label>
                <input type="text" name="titre" value="titre">
            </div>
            <div class="input-field col s6">
                <label for='description'>Description : </label>
                <textarea class="textarea1" name="description"></textarea>
            </div>
            <div class="input-field col s6">
                <input class="sectionFichier1" type="file" name="image" id="image"/>
                <input  type='submit' class='btn btn-success' name='envoyer' value='Envoyer'>
            </div>
        </div>
    </form>


<?php
}
?>


<?php
    include_once("footer.php");
?>