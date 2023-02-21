<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Include</title>
    </head>
    <body>
        
        <?php
            include  __DIR__ . '/partials/header.php';
        ?>

        <main>
            MAIN
        </main>
        
        <?php
            include_once __DIR__ . '/partials/footer.php';
        ?>

    </body>
</html>