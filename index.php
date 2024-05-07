<?php
    include_once __DIR__ . '/partials/utilities.php';
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
                                <input type="email" name="mail" placeholder="Inserire la propria email">
                                <button>Invia</button>    
                            </form>
                            <!-- ALERT -->
                            <div class="alert alert-primary my-5" role="alert">
                                <?php echo mail_ceck($user_mail) === true ? "Email valida" : "Inserire Email valida" ; ?>
                            </div>                       
                        </div>
                    </div>
                </section>
            </main>
            <!-- FOOTER -->
            <?php 
            include __DIR__ . '/partials/templates/footer.php';
            ?>
        </div>

        <!-- BOOTSTRAP JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>