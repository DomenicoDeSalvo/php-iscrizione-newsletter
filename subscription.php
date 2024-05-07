<?php
session_start();

$value = $_SESSION["value"] ?? '';

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Newsletter</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <!-- ALERT -->
            <div class="alert text-center alert-primary my-5" role="alert">
                <?php echo $value === true ? "Email valida" : "Inserire Email valida" ; ?>
            </div>
        </div>
    </body>
</html>