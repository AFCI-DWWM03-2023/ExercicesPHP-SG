<?php ob_start() ?>

<link rel="stylesheet" href="./style.css">

<?php
session_start();
$content = ob_get_clean();
require "template.php";
 
?>
    <section>

        <form action="#" method="POST" class="form">
            <label for="nom">Nom</label>
            <input type="text" class="nom" name="nom" value=""></input>
            <label for="age">Age</label>
            <input type="number" class="age" name="age" value=""></input>
            <button type="submit" class="valider" name="valider" value="valider"></button>
        </form>

        <?php

$_SESSION['nom'] = $_POST['nom'];
$_SESSION['age'] = $_POST['age'];

echo "Vous êtes ";
echo $_SESSION['nom'];
echo " et vous avez ";
echo $_SESSION['age'];
echo " ans ";

echo " "."<br>"." <a href='page2.php'>Accedez a la page de votre compte</a>"


        ?>

    </section>

</body>
</html>