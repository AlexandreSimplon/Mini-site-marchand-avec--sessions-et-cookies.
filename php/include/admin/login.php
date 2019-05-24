<?php
    include_once ("header.php");
?>


    <h1 class="center titre1">Se connecter</h1>
    <form class="formulaireinscription1" method='post' action="login_post.php">

        <div class="container center inscriptionphp">
            <div class="input-field col s6">
                <label for="email">Email</label>
                <input type="email" name="email" required>
            </div>
            <div class="input-field col s6">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" required>
            </div>
            <div class="input-field col s6">
                <button class="BoutonEnvoyer" type="submit"><b>Connection</b></button>
            </div>
        </div>
    </form>


<?php
    include_once ("footer.php");
?>