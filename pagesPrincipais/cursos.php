<?php?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instituto Saber</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Css Externo -->
    <link rel="stylesheet" href="../estilo/principal.css">
    <!-- Css Externo -->
    <link rel="stylesheet" href="../estilo/principalMedia.css">
    <!-- Css Externo -->
    <link rel="stylesheet" href="../estilo/cursos.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/ed05ecfdf1.js" crossorigin="anonymous"></script>

</head>

<body>

    <header>
        <div class="container-fluid">
            <center><img class="img mt-5 text-center" src="../img/logo2.png" alt=""></center></br>
            <?php include 'sociais.php';?>


        </div>


        <!-- Nav -->
        <nav class="navbar navbar-expand-lg navbar-light">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">

                <ul class="navbar-nav" style="font-size: 20px;font-family: 'Roboto Condensed', sans-serif;">
                    <li class="nav-item active">
                        <a class="p-2 text-secondary" href="../index.php">Home</a>
                    </li>

                    
                    <li class="nav-item active">
                        <a class="p-2 text-secondary" href="cursos.php">Cursos</a>
                    </li>

                    <li class="nav-item active">
                        <a class="p-2 text-secondary" href="nucleos.php">Núcleos</a>
                    </li>

                    <li class="nav-item active">
                        <a class="p-2 text-secondary" href="parceiros.php">Parceiros</a>
                    </li>

                    <li class="nav-item active">
                        <a class="p-2 text-secondary" href="contato.php">Contato</a>
                    </li>

                    <li class="nav-item active">
                        <a class="p-2 text-secondary" href="http://www.sabercultura.com.br/ava/login/"
                            target="_blank">Sala Virtual</a>
                    </li>
                </ul>
            </div>
        </nav>


        <!-- Fim Nav -->
        <hr>
    </header>

    <div class="container d-none d-md-block d-lg-block d-xl-block">
        <section id="cursos">
            
            <?php include 'allCursos.php';?>
        </section>
    </div>

    <div class="container-fluid d-none d-md-block d-lg-block d-xl-block">
        <section id="footer">
            <?php include 'footer.php';?>
        </section>
    </div>

    <!-- @MEDIA -->
    <div class="container d-block d-sm-block d-md-none">
        <section id="cursos">
            <?php include 'allCursos.php';?>
        </section>
    </div>

    <div class="container d-block d-sm-block d-md-none">
        <section id="footer">
            <?php include 'footer.php';?>
        </section>
    </div>

    <!-- FIM @Media -->

    <!-- Modais -->
 

    <!-- Fim Modais -->

    <!--Whats-->
    <a href="https://api.whatsapp.com/send?phone=5561983361747&text=Seja%20Bem%20Vindo%20ao%20Instituto%20Saber%2C%20Como%20podemos%20ajudar%3F"
        class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
    <!--FIM Whats-->



    <!-- Java Script Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <!-- FIM JS -->
</body>

</html>