<?php ob_start() ?>

<link rel="stylesheet" href="./style.css">

<?php
session_start();
$content = ob_get_clean();
require "template.php";
 
echo "Vous êtes ";
echo $_SESSION['nom'];
echo " et vous avez ";
echo $_SESSION['age'];
echo " ans ";



session_destroy();

