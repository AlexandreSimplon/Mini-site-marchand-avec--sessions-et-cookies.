<?php
    include_once("header.php");
?>


    <h1 class="center titre1">Inscription</h1>
        <form class="formulaireinscription1" method='post' action="inscription.php">
        
            <div class="container center inscriptionphp">

                <div class="input-field col s6">
                    <label for="first_name">First Name</label>
                    <input id="first_name" type="text" class="validate">
                </div>

                <div class="input-field col s6">
                    <label for="email">Email</label>
                    <input type="email" name="email" required>
                </div>

                <div class="input-field col s6">
                    <label for="pseudo">Pseudo</label>
                    <input type="text" name="pseudo" required>
                </div>

                <div class="input-field col s6">
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" required>
                </div>

                <div>
                    <button class="BoutonEnvoyer" type="submit"><b>Envoyer</b></button>
                </div>

            </div>
        </form>



<?php
    include_once("footer.php");
?>
