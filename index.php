<?php
    session_start();

    require_once __DIR__ . '/partials/utilities.php';

    //Recuperare la mail
    $user_mail = $_POST["mail"] ?? null;

    if($user_mail){
        //Controllare che sia valida
        $value = mail_ceck($user_mail);
        
        $_SESSION["value"] = $value;
        //Redirect
        header('Location: ./subscription.php');
    }




?>

<!-- HTML -->
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
                <section>
                    <div class="container">
                        <div class="my-5 text-center">
                            <!-- FORM -->
                            <form action="" method="post">
                                <input type="email" name="mail" value="<?php echo $user_mail?>" placeholder="Inserire la propria email">
                                <button>Invia</button>    
                            </form>                       
                        </div>
                    </div>
                </section>
            </main>
            <!-- FOOTER -->
            <?php 
            include __DIR__ . '/partials/templates/footer.php';
            ?>
        </div>
    </body>
</html>