<!-- HEADER -->
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cousine&display=swap">
    <link rel="stylesheet" href="/scss/index.css">
    <link rel="shortcut icon" type="/image/x-icon" hef="favicon.ico" />

    <meta charset='UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
</head>

<body>


    <div class="container-fluid">
        <div class="row justify-content-between d-flex align-items-center">

            <div class="col-2 text-center">
                <img src="/src/img/brasao_americana.png" style="padding-top: 10px; padding-bottom: 10px; max-height: 90px;">
            </div>

            <div class="col-8">
                <div class="d-none d-md-block text-center">
                    <h3 class="pt-2">Secretaria de Assistência Social e Direitos Humanos</h3>
                    <h4>Prefeitura de Americana</h4>
                </div>
                <div class="d-block d-md-none text-center">
                    <h3 class="pt-2">SASDH</h3>
                </div>
            </div>

            <div class="col-2">
            </div>

        </div>
    </div>


    <!-- NAVBAR -->
    <div class="row-fluid border-bottom border-primary sticky-top">
        <nav class="rounded-bottom navbar navbar-expand-md navbar-light bg-white">
            <a class="border rounded px-1 py-0 navbar-brand text-white bg-primary" href="/"><strong>SASDH</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                    <!-- HOME -->
                    <li class="nav-item border-primary">
                        <a class="nav-link" href="/">Página principal <span class="sr-only">(current)</span></a>
                    </li>

                    <!-- SERVICES -->
                    <li class="nav-item dropdown border-primary" id="dropServices">
                        <a class="nav-link dropdown-toggle" id="services" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Serviços
                        </a>
                        <div class="dropdown-menu pt-0 mt-0 width-400" aria-labelledby="services">

                            <a class="dropdown-item btn mt-1" id="btnCad" href="https://www.americana.sp.gov.br/download/cmas/diversos/pmas-2018-2021.pdf">
                                <div class="row">
                                    <div class="col-fill d-flex align-tems-center"><img style="width: 24px;" class="float-left" src="/src/icons/icon-pdf.png"></div>
                                    <div class="col text-wrap mt-0">Plano Municipal de Assistência Social - 2018 - 2020</div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item btn mt-1" id="btnCad" href="/src/default/servicos/protecaoSocialBasica.php">Proteção Social Básica</a>
                            <a class="dropdown-item btn mt-1" id="btnCad" href="/src/default/servicos/protecaoSocialEspecial.php">Proteção Social Especial</a>
                            <a class="dropdown-item btn mt-1" id="btnCad" href="/src/default/servicos/cadastroUnico.php">Cadastro Único</a>
                            <a class="dropdown-item btn mt-1" id="btnCad" href="">Entidades</a>

                        </div>
                    </li>

                    <!-- FREQUENTLY QUESTION -->
                    <li class="nav-item dropdown border-primary" id="dropfrequentlyQuestion">
                        <a class="nav-link dropdown-toggle" id="frequentlyQuestion" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dúvidas Frequentes
                        </a>
                        <div class="dropdown-menu pt-0 mt-0 width-400" aria-labelledby="frequentlyQuestion">
                            <a class="dropdown-item btn" id="btnCad" href="/src/default/perguntasfrequentes/cad.php">Cadastro Único (CAD)</a>
                            <div class="dropdown-divider"></div>
                            <span class="dropdown-header" style="font-size: 10px">Auxílio Emergencial (AE - Caixa)</span>
                            <a class="dropdown-item btn" id="btnAeIg" href="/src/default/perguntasfrequentes/aeinformacoes.php">AE - Informações Gerais</a>
                            <a class="dropdown-item btn" id="btnAeCa" href="/src/default/perguntasfrequentes/aecadastramento.php">AE - Cadastramento</a>
                            <a class="dropdown-item btn" id="btnAeAp" href="/src/default/perguntasfrequentes/aeapp.php">AE - APP</a>
                            <a class="dropdown-item btn" id="btnAeRa" href="/src/default/perguntasfrequentes/aeresultado.php">AE - Resultado da Avaliação do Cadastro</a>
                            <a class="dropdown-item btn" id="btnAePb" href="/src/default/perguntasfrequentes/aepagamento.php">AE - Pagamento do Benefício</a>
                            <a class="dropdown-item btn" id="btnAeCe" href="/src/default/perguntasfrequentes/aecasosespeciais.php">AE - Casos Especiais</a>
                        </div>
                    </li>

                </ul>
            </div>


        </nav>
    </div>


    <!-- CONTENT -->
    <div class="container text-justify py-4">
        <div class="row">
            <div id="app" class="col-md-10 col-sm-12">