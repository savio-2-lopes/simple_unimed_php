<?php
session_start();

if (isset($_POST['cadastrar'])) {
    require_once('conecta.php');
    require_once('DAOproposta.php');

    $cadastrar = new ConsultaPOO();

    $nome = trim(strip_tags($_POST['nome']));
    $idade = trim(strip_tags($_POST['idade']));
    $plano = trim(strip_tags($_POST['plano']));
    $total = trim(strip_tags($_POST['total']));

    $insert = $cadastrar->submit($nome, $idade, $plano, $total);
}
?>

<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compartible" content="IE=edge">

    <title>Dashboard / Unimed!</title>

    <link rel="icon" type="image/png" href="https://adufs.org.br/manager/resources/uploads/1812/cc5a8eae98baf6166c706ff559773217.jpg" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body class="pt-5">
    <aside class="sufee-login d-flex align-content-center">

        <section class="header-box col-lg-10 col-md-10 col-sm-10" id="boxIn">
            <center>
                <div class="section-box">
                    <a href="#" style="text-decoration:none">
                        <picture class="logo">
                            <img class="img-fluid" id="logo" srcset="https://logodownload.org/wp-content/uploads/2014/05/unimed-logo-1.png">
                        </picture>
                    </a>

                    <form method="POST" class="mt-3">
                        <input type="text" class="input-box" placeholder="Nome" name="nome" id="nome" required>
                        <input type="text" class="input-box" placeholder="Idade" name="idade" id="idade" required>

                        <select class="select-box" name="plano" id="tipo" required>
                            <option>Enfermaria</option>
                            <option>Apartamento</option>
                        </select>
                    </form>

                    <section class="col-lg-5 col-md-5 col-sm-5 mt-4">
                        <button class="btn btn-success btn-block" onclick="onVanish(); calculate()">Calcular Valor Base</button>
                    </section>
                </div>
            </center>
        </section>

        <section class="row-box" id="boxOnShow">
            <center>
                <div class="section-box">
                    <a href="#" style="text-decoration:none">
                        <picture class="logo">
                            <img class="img-fluid" id="logo" srcset="https://logodownload.org/wp-content/uploads/2014/05/unimed-logo-1.png">
                        </picture>
                    </a>

                    <section>
                        <p>Selecione o número de dependentes:</p>
                    </section>

                    <form method="POST">
                        <select class="select-box" id="b" onclick="showIn()">
                            <option>0</option>
                            <option>
                                <div>1</div>
                            </option>
                            <option>2</option>
                            <option>3</option>
                        </select>

                        <input type="text" placeholder="Insira a idade 1" id="n1" required>
                        <input type="text" placeholder="Insira a idade 2" id="n2" required>
                        <input type="text" placeholder="Insira a idade 3" id="n3" required>
                    </form>

                    <section class="col-lg-5 col-md-5 col-sm-5 mt-4">
                        <button class="btn btn-success btn-block" onclick="dependente(); onDisplay()">Visualizar</button>
                    </section>
                </div>
            </center>
        </section>

        <section class="row-box" id="boxIn3">
            <center>
                <div class="section-box">
                    <header>
                        <h1>Orçamento:</h2>
                    </header>

                    <form action="#" method="POST">
                        <input type="text" name="nome" placeholder="Nome" id="nome2" readonly>
                        <input type="text" placeholder="ident" id="ident2" readonly>
                        <input type="text" name="total" placeholder="Valor" id="valor2" readonly>
                        <input type="text" name="idade" placeholder="Idade" id="idade3" readonly>
                        <input type="text" name="plano" placeholder="Entidade" id="tipo2" readonly>

                        <section class="col-lg-5 col-md-5 col-sm-5 mt-4">
                            <button class="btn btn-success btn-block" type="submit" name="cadastrar">Confirmar</button>
                            <button class="btn btn-danger btn-block">Cancelar</button>
                        </section>
                    </form>
                </div>
            </center>
        </section>
    </aside>

    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

</body>

</html>