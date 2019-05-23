<?php
    include_once("header.php");
?>


    <h1>Inscription</h1>
    <form method='post' action="inscription.php">

        <div class="input-field col s6">
            <label for="first_name">First Name</label>
            <input placeholder="Placeholder" id="first_name" type="text" class="validate">
        </div>



        <div>
            <label for="email">Email</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label for="pseudo">Pseudo</label>
            <input type="text" name="pseudo" required>
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" required>
        </div>
        <div>
        <button type="submit">Envoyer</button>
        </div>
    </form>



<?php
    include_once("footer.php");
?>
