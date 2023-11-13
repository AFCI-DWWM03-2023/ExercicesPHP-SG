<?php ob_start() ?>
<link rel="stylesheet" href="./style.css">
<?php
$content = ob_get_clean();
require "template.php";
require "traduction.php";  
?>
    <section>

        <form action="#" method="get" class="form">

            <button class="france" name="france" value="france"></button>
            <button class="angleterre" name="angleterre" value="angleterre"></button>
            <button class="espagne" name="espagne" value="espagne"></button>

        </form>

        <?php

    Traduction($_GET['france'],$_GET['angleterre'],$_GET['espagne'])
        ?>

    </section>

</body>
</html>