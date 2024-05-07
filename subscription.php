<?php
session_start();

$value = $_SESSION["value"] ?? null;

//Fare sì che ricaricando la pagina si torni a index.php
//Se $value sarà null si tornerà alla pagina precedente
if($value === null){
    header('Location: ./index.php');
};

session_unset();

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
    <div class="vh-100 d-flex flex-column" id="app">
            <!-- HEADER -->
            <?php
            include __DIR__ . '/partials/templates/header.php';
            ?>
            <!-- MAIN -->
            <main class="flex-grow-1">
                <div class="container">
                    <!-- ALERT -->
                    <div class="alert text-center alert-primary my-5" role="alert">
                        <?php echo $value === true ? "Email valida" : "Inserire Email valida" ; ?>
                    </div>
                </div>  
            </main>
            <!-- FOOTER -->
            <?php 
            include __DIR__ . '/partials/templates/footer.php';
            ?>
        </div>
    </body>
</html>