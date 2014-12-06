<?php
/**
 * Created by PhpStorm.
 * User: Universidad
 * Date: 17/10/14
 * Time: 06:22 PM
 */

    $usuario2 = new Usuario();
?>
<html>
    <head> </head>
    <body>
        <h1><?=$titulo ?></h1>
        <p><?=$contenido ?></p>
        <p><?=$nombre ?></p>
        <p>
            <?php
            $usuario2->setUsuario();
            $usuario2->getUsuario();

            $usuario2->readUserG();
            ?>
        </p>
    </body>
</html>