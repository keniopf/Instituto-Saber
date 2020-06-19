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

    <div style="position:absolute;left:925px;top:90px">
        <a href="https://twitter.com/InstitutoSaber" class="twitter-follow-button" data-lang="pt">Siga
            @InstitutoSaber</a>
        <script src="//platform.twitter.com/widgets.js" type="text/javascript"></script>
    </div>


    <div class="container d-none d-md-block d-lg-block d-xl-block">
        <section>
            <div style="text-align: center">
                <br>
                <h3 style="font-size:30px;font-family: 'Roboto Condensed', sans-serif;" data-aos="fade-in">Parceiros
                </h3>

                <p style='color: #8F8F8F; font-size: 14px; text-align: center; margin-bottom: 20px;'>O Instituto Saber
                    trabalha com instituições que demonstram responsabilidade social e compromisso com o desenvolvimento
                    educacional e científico do país.</p>
                <hr>
            </div>

            <div style="text-align: center">
                <br>
                <h3 style="font-size:30px;font-family: 'Roboto Condensed', sans-serif;" data-aos="fade-in">Parceiros
                    Certificadores
                </h3> <br>


            </div>
            <div class="row text-center mt-5 ">

                <div class="col-sm">
                    <!-- Card -->
                    <div class="card" style="border: none">

                        <!-- Card image -->
                        <img class="card-img-top" src="../img/icone_fao.gif" style="width:130px; margin: auto;"
                            alt="Card image cap">

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title" style="font-size:17px"><a>FAO - Faculdade de Orlândia</a></h4>
                            <!-- Text -->
                            <p class="card-text">
                                Avenida 15 º 255 A – Jardim Nova Orlândia, Orlandia/SP</br>
                                Profa. Carolina</br>
                                (16) 3826-9888</br>
                                fao@fao.com.br</br>
                                http://www.fao.com.br</p>


                        </div>

                    </div>
                    <!-- Card -->
                </div>

                <div class="col-sm">
                    <!-- Card -->
                    <div class="card" style="border: none">

                        <!-- Card image -->
                        <img class="card-img-top" src="../img/icone_pua.gif" style="width:130px; margin: auto;"
                            alt="Card image cap">

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title" style="font-size:17px"><a>Peoples University of the Americas</a></h4>
                            <!-- Text -->
                            <p class="card-text">
                                Malaga - Espanha</br>
                                Prof. Lozano Marques</br>
                                http://www.pua.edu</p>


                        </div>

                    </div>
                    <!-- Card -->
                </div>

                <div class="col-sm">
                    <!-- Card -->
                    <div class="card" style="border: none">

                        <!-- Card image -->
                        <img class="card-img-top" src="../img/icone_ftp.gif" style="width:130px; margin: auto;"
                            alt="Card image cap">

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title" style="font-size:17px"><a>FTP - Faculdade Tecnológica de Palmas</a>
                            </h4>
                            <!-- Text -->
                            <p class="card-text">
                                106 Norte, Av. JK, Lote 20, Sala 05 - Sobreloja, Palmas/TO</br>
                                Profa. Rosana Cipriano Jacinto</br>
                                (63)3212-1215</br>
                                ftp@sabercultura.com.br</br>
                                http://www.ftp.edu.br</p>


                        </div>

                    </div>
                    <!-- Card -->
                </div>

                <div class="col-sm">
                    <!-- Card -->
                    <div class="card" style="border: none">

                        <!-- Card image -->
                        <img class="card-img-top" src="../img/avila.gif" style="width:130px; margin: auto;"
                            alt="Card image cap">

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title" style="font-size:17px"><a>Faculdade Ávila</a></h4>
                            <!-- Text -->
                            <p class="card-text">
                                Avenida T-01 com T-55 Setor Bueno</br>
                                Laércio Ávila</br>
                                (62)3945-6363</br>
                                (62)3931-6674</br>
                                pos@faculdadeavila.com.br</br>
                                http://www.faculdadeavila.com.br/</p>


                        </div>

                    </div>
                    <!-- Card -->
                </div>


            </div>

            <div class="row text-center mt-5 ">
                <div class="col-sm">
                    <!-- Card -->
                    <div class="card" style="border: none">

                        <!-- Card image -->
                        <img class="card-img-top" src="../img/icone_epd.gif" style="width:130px; margin: auto;"
                            alt="Card image cap">

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title" style="font-size:17px"><a>EPD - Escola Paulista de Direito</a></h4>
                            <!-- Text -->
                            <p class="card-text">
                                Av. Liberdade, 956 - Liberdade - São Paulo-SP</br>
                                01502-001</br>
                                (11) 3273-3600 - 0800 775 5522</br>
                                http://www.epd.edu.br</p>


                        </div>

                    </div>
                    <!-- Card -->
                </div>

                <div class="col-sm">
                    <!-- Card -->
                    <div class="card" style="border: none">

                        <!-- Card image -->
                        <img class="card-img-top" src="../img/icone_pua.gif" style="width:130px; margin: auto;"
                            alt="Card image cap">

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title" style="font-size:17px"><a>
                                    IESPE Cursos</a></h4>
                            <!-- Text -->
                            <p class="card-text">
                                Rua 87 nº 351 - Setor Sul - Goiânia-GO</br>
                                74.093-300</br>
                                (62) 3541-1500</br>
                                http://www.iespecursos.com.br</p>


                        </div>

                    </div>
                    <!-- Card -->
                </div>




            </div>

            <div style="text-align: center">
                <br>
                <h3 style="font-size:30px;font-family: 'Roboto Condensed', sans-serif;" data-aos="fade-in">Parceiros
                    Comerciais
                </h3> <br>


            </div>

            <div class="row text-center mt-5 ">

                <div class="col-sm">
                    <!-- Card -->
                    <div class="card" style="border: none">

                        <!-- Card image -->
                        <img class="card-img-top" src="../img/icone_apada.gif" style="width:130px; margin: auto;"
                            alt="Card image cap">

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title" style="font-size:17px"><a>APADA - Associação dos Pais e Amigos dos
                                    Deficientes Auditivos</a></h4>
                            <!-- Text -->
                            <p class="card-text">
                                CRS 515 Bloco B entrada 27, 1º andar – Brasília DF</br>
                                Profa. Rosana Cipriano</br>
                                (61)346-8025</br>
                                rosana@apadadf.org.br</br>
                                http://www.apadadf.org.br</p>


                        </div>

                    </div>
                    <!-- Card -->
                </div>

                <div class="col-sm">
                    <!-- Card -->
                    <div class="card" style="border: none">

                        <!-- Card image -->
                        <img class="card-img-top" src="../img/icone_cbn.gif" style="width:130px; margin: auto;"
                            alt="Card image cap">

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title" style="font-size:17px"><a>CBN – Convenção Batista Nacional do
                                    Distrito Federal</a></h4>
                            <!-- Text -->
                            <p class="card-text">
                                Av. Contorno s/n, Centro - Anápolis - GO CEP: 75020-010</br>
                                (61)3224-0536</br>
                                http://www.cbndf.com.br</p>


                        </div>

                    </div>
                    <!-- Card -->
                </div>

                <div class="col-sm">
                    <!-- Card -->
                    <div class="card" style="border: none">

                        <!-- Card image -->
                        <img class="card-img-top" src="../img/icone_agilita.gif" style="width:130px; margin: auto;"
                            alt="Card image cap">

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title" style="font-size:17px"><a>Instituto Agilità</a>
                            </h4>
                            <!-- Text -->
                            <p class="card-text">
                                CLSW 105 Bloco C Sala 150, Ed. Diana Mall Business CEP: 70670-433 Brasília, DF</br>
                                Beatriz Schwab Fernandes</br>
                                (61) 3234-2738</br>
                                (61) 8111-5993</br>
                                institutoagilita@uol.com.br</br>
                                http://www.institutoagilita.com.br</p>


                        </div>

                    </div>
                    <!-- Card -->
                </div>

                <div class="col-sm">
                    <!-- Card -->
                    <div class="card" style="border: none">

                        <!-- Card image -->
                        <img class="card-img-top" src="../img/icone_arte_df.gif" style="width:130px; margin: auto;"
                            alt="Card image cap">

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title" style="font-size:17px"><a>Arteterapia DF - Equilibrar-te</a></h4>
                            <!-- Text -->
                            <p class="card-text">
                                Agivanda Soares de Andrade</br>
                                agivanda@arteterapiadf.com.br</br>
                                http://www.arteterapiadf.com.br</p>


                        </div>

                    </div>
                    <!-- Card -->
                </div>


            </div>

            <div class="row text-center mt-5 ">
                <div class="col-sm">
                    <!-- Card -->
                    <div class="card" style="border: none">

                        <!-- Card image -->
                        <img class="card-img-top" src="../img/icone_crianca.gif" style="width:130px; margin: auto;"
                            alt="Card image cap">

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title" style="font-size:17px"><a> Missão Criança</a></h4>
                            <!-- Text -->
                            <p class="card-text">
                                CLN 107 Bloco C sala 101- Brasília - DF - 70743-530</br>
                                (61) 3273-4620</br>
                                (61) 3274-4261</br>
                                atendimento@missaocrianca.org.br</br>
                                http://www.missaocrianca.org.br</p>


                        </div>

                    </div>
                    <!-- Card -->
                </div>

                <div class="col-sm">
                    <!-- Card -->
                    <div class="card" style="border: none">

                        <!-- Card image -->
                        <img class="card-img-top" src="../img/icone_crianca.gif" style="width:130px; margin: auto;"
                            alt="Card image cap">

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title" style="font-size:17px"><a>
                                    Sindigoiânia - Sindicato dos Trabalhadores do Município de Goiânia</a></h4>
                            <!-- Text -->
                            <p class="card-text">
                                Rua Dr. Olinto Manso Pereira, 615 Setor Sul</br>
                                Prof. Edival Jacinto</br>
                                (62) 3212-6053</br>
                                http://www.sindigoiania.org.br</p>


                        </div>

                    </div>
                    <!-- Card -->
                </div>




            </div>
        </section>
    </div>


    <div class="container d-none d-md-block d-lg-block d-xl-block">
        <section id="footer">
            <?php include 'footer.php';?>
        </section>
    </div>



    <!-- @MEDIA -->


    <div class="container d-block d-sm-block d-md-none ">

        <section>
            <div style="text-align: center">
                <br>
                <h3 style="font-size:30px;font-family: 'Roboto Condensed', sans-serif;" data-aos="fade-in">Parceiros
                </h3>

                <p style='color: #8F8F8F; font-size: 14px; text-align: center; margin-bottom: 20px;'>O Instituto Saber
                    trabalha com instituições que demonstram responsabilidade social e compromisso com o desenvolvimento
                    educacional e científico do país.</p>
                <hr>
            </div>

            <div style="text-align: center">
                <br>
                <h3 style="font-size:30px;font-family: 'Roboto Condensed', sans-serif;" data-aos="fade-in">Parceiros
                    Certificadores
                </h3> <br>


            </div>
            <div class="row text-center mt-5 ">

                <div class="col-sm">
                    <!-- Card -->
                    <div class="card" style="border: none">

                        <!-- Card image -->
                        <img class="card-img-top" src="../img/icone_fao.gif" style="width:130px; margin: auto;"
                            alt="Card image cap">

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title" style="font-size:17px"><a>FAO - Faculdade de Orlândia</a></h4>
                            <!-- Text -->
                            <p class="card-text">
                                Avenida 15 º 255 A – Jardim Nova Orlândia, Orlandia/SP</br>
                                Profa. Carolina</br>
                                (16) 3826-9888</br>
                                fao@fao.com.br</br>
                                http://www.fao.com.br</p>


                        </div>

                    </div>
                    <!-- Card -->
                </div>

                <div class="col-sm">
                    <!-- Card -->
                    <div class="card" style="border: none">

                        <!-- Card image -->
                        <img class="card-img-top" src="../img/icone_pua.gif" style="width:130px; margin: auto;"
                            alt="Card image cap">

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title" style="font-size:17px"><a>Peoples University of the Americas</a></h4>
                            <!-- Text -->
                            <p class="card-text">
                                Malaga - Espanha</br>
                                Prof. Lozano Marques</br>
                                http://www.pua.edu</p>


                        </div>

                    </div>
                    <!-- Card -->
                </div>

                <div class="col-sm">
                    <!-- Card -->
                    <div class="card" style="border: none">

                        <!-- Card image -->
                        <img class="card-img-top" src="../img/icone_ftp.gif" style="width:130px; margin: auto;"
                            alt="Card image cap">

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title" style="font-size:17px"><a>FTP - Faculdade Tecnológica de Palmas</a>
                            </h4>
                            <!-- Text -->
                            <p class="card-text">
                                106 Norte, Av. JK, Lote 20, Sala 05 - Sobreloja, Palmas/TO</br>
                                Profa. Rosana Cipriano Jacinto</br>
                                (63)3212-1215</br>
                                ftp@sabercultura.com.br</br>
                                http://www.ftp.edu.br</p>


                        </div>

                    </div>
                    <!-- Card -->
                </div>

                <div class="col-sm">
                    <!-- Card -->
                    <div class="card" style="border: none">

                        <!-- Card image -->
                        <img class="card-img-top" src="../img/avila.gif" style="width:130px; margin: auto;"
                            alt="Card image cap">

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title" style="font-size:17px"><a>Faculdade Ávila</a></h4>
                            <!-- Text -->
                            <p class="card-text">
                                Avenida T-01 com T-55 Setor Bueno</br>
                                Laércio Ávila</br>
                                (62)3945-6363</br>
                                (62)3931-6674</br>
                                pos@faculdadeavila.com.br</br>
                                http://www.faculdadeavila.com.br/</p>


                        </div>

                    </div>
                    <!-- Card -->
                </div>


            </div>

            <div class="row text-center mt-5 ">
                <div class="col-sm">
                    <!-- Card -->
                    <div class="card" style="border: none">

                        <!-- Card image -->
                        <img class="card-img-top" src="../img/icone_epd.gif" style="width:130px; margin: auto;"
                            alt="Card image cap">

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title" style="font-size:17px"><a>EPD - Escola Paulista de Direito</a></h4>
                            <!-- Text -->
                            <p class="card-text">
                                Av. Liberdade, 956 - Liberdade - São Paulo-SP</br>
                                01502-001</br>
                                (11) 3273-3600 - 0800 775 5522</br>
                                http://www.epd.edu.br</p>


                        </div>

                    </div>
                    <!-- Card -->
                </div>

                <div class="col-sm">
                    <!-- Card -->
                    <div class="card" style="border: none">

                        <!-- Card image -->
                        <img class="card-img-top" src="../img/icone_pua.gif" style="width:130px; margin: auto;"
                            alt="Card image cap">

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title" style="font-size:17px"><a>
                                    IESPE Cursos</a></h4>
                            <!-- Text -->
                            <p class="card-text">
                                Rua 87 nº 351 - Setor Sul - Goiânia-GO</br>
                                74.093-300</br>
                                (62) 3541-1500</br>
                                http://www.iespecursos.com.br</p>


                        </div>

                    </div>
                    <!-- Card -->
                </div>




            </div>

            <div style="text-align: center">
                <br>
                <h3 style="font-size:30px;font-family: 'Roboto Condensed', sans-serif;" data-aos="fade-in">Parceiros
                    Comerciais
                </h3> <br>


            </div>

            <div class="row text-center mt-5 ">

                <div class="col-sm">
                    <!-- Card -->
                    <div class="card" style="border: none">

                        <!-- Card image -->
                        <img class="card-img-top" src="../img/icone_apada.gif" style="width:130px; margin: auto;"
                            alt="Card image cap">

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title" style="font-size:17px"><a>APADA - Associação dos Pais e Amigos dos
                                    Deficientes Auditivos</a></h4>
                            <!-- Text -->
                            <p class="card-text">
                                CRS 515 Bloco B entrada 27, 1º andar – Brasília DF</br>
                                Profa. Rosana Cipriano</br>
                                (61)346-8025</br>
                                rosana@apadadf.org.br</br>
                                http://www.apadadf.org.br</p>


                        </div>

                    </div>
                    <!-- Card -->
                </div>

                <div class="col-sm">
                    <!-- Card -->
                    <div class="card" style="border: none">

                        <!-- Card image -->
                        <img class="card-img-top" src="../img/icone_cbn.gif" style="width:130px; margin: auto;"
                            alt="Card image cap">

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title" style="font-size:17px"><a>CBN – Convenção Batista Nacional do
                                    Distrito Federal</a></h4>
                            <!-- Text -->
                            <p class="card-text">
                                Av. Contorno s/n, Centro - Anápolis - GO CEP: 75020-010</br>
                                (61)3224-0536</br>
                                http://www.cbndf.com.br</p>


                        </div>

                    </div>
                    <!-- Card -->
                </div>

                <div class="col-sm">
                    <!-- Card -->
                    <div class="card" style="border: none">

                        <!-- Card image -->
                        <img class="card-img-top" src="../img/icone_agilita.gif" style="width:130px; margin: auto;"
                            alt="Card image cap">

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title" style="font-size:17px"><a>Instituto Agilità</a>
                            </h4>
                            <!-- Text -->
                            <p class="card-text">
                                CLSW 105 Bloco C Sala 150, Ed. Diana Mall Business CEP: 70670-433 Brasília, DF</br>
                                Beatriz Schwab Fernandes</br>
                                (61) 3234-2738</br>
                                (61) 8111-5993</br>
                                institutoagilita@uol.com.br</br>
                                http://www.institutoagilita.com.br</p>


                        </div>

                    </div>
                    <!-- Card -->
                </div>

                <div class="col-sm">
                    <!-- Card -->
                    <div class="card" style="border: none">

                        <!-- Card image -->
                        <img class="card-img-top" src="../img/icone_arte_df.gif" style="width:130px; margin: auto;"
                            alt="Card image cap">

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title" style="font-size:17px"><a>Arteterapia DF - Equilibrar-te</a></h4>
                            <!-- Text -->
                            <p class="card-text">
                                Agivanda Soares de Andrade</br>
                                agivanda@arteterapiadf.com.br</br>
                                http://www.arteterapiadf.com.br</p>


                        </div>

                    </div>
                    <!-- Card -->
                </div>


            </div>

            <div class="row text-center mt-5 ">
                <div class="col-sm">
                    <!-- Card -->
                    <div class="card" style="border: none">

                        <!-- Card image -->
                        <img class="card-img-top" src="../img/icone_crianca.gif" style="width:130px; margin: auto;"
                            alt="Card image cap">

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title" style="font-size:17px"><a> Missão Criança</a></h4>
                            <!-- Text -->
                            <p class="card-text">
                                CLN 107 Bloco C sala 101- Brasília - DF - 70743-530</br>
                                (61) 3273-4620</br>
                                (61) 3274-4261</br>
                                atendimento@missaocrianca.org.br</br>
                                http://www.missaocrianca.org.br</p>


                        </div>

                    </div>
                    <!-- Card -->
                </div>

                <div class="col-sm">
                    <!-- Card -->
                    <div class="card" style="border: none">

                        <!-- Card image -->
                        <img class="card-img-top" src="../img/icone_crianca.gif" style="width:130px; margin: auto;"
                            alt="Card image cap">

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title" style="font-size:17px"><a>
                                    Sindigoiânia - Sindicato dos Trabalhadores do Município de Goiânia</a></h4>
                            <!-- Text -->
                            <p class="card-text">
                                Rua Dr. Olinto Manso Pereira, 615 Setor Sul</br>
                                Prof. Edival Jacinto</br>
                                (62) 3212-6053</br>
                                http://www.sindigoiania.org.br</p>


                        </div>

                    </div>
                    <!-- Card -->
                </div>




            </div>
        </section>
    </div>

    <div class="container d-block d-sm-block d-md-none ">
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