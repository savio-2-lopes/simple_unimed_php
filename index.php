<?php
session_start();

if (isset($_POST['cadastrar'])) {
    require_once('conecta.php');
    require_once('DAOproposta.php');

    $cadastrar = new PropostaDAO();

    $nome = trim(strip_tags($_POST['nome']));
    $idade = trim(strip_tags($_POST['idade']));
    $plano = trim(strip_tags($_POST['plano']));
    $total = trim(strip_tags($_POST['total']));

    $insere = $cadastrar->cadastra($nome, $idade, $plano, $total);
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

<body>
    <div class="box1" id="bx">
        <center>
            <div class="caixa">
                <p>Insira seu dados:</p>
                <form>
                    <input type="text" placeholder="Nome" name="nome" id="nome">
                    <input type="text" placeholder="Idade" name="idade" id="idade">

                    <select class="selecionar" name="plano" id="tipo">
                        <option>Enfermaria</option>
                        <option>Apartamento</option>
                    </select>

                </form>
                <button class="log" onclick="sumir(); conta()">Calcular Valor Base</button>
            </div>
        </center>
    </div>

    <div class="box3" id="bx2">
        <center>

            <div class="caixa">
                <p>Selecione o número de dependentes:</p>
                <form>
                    <select class="selecionar" id="b" onclick="mostraIn()">
                        <option>0</option>
                        <option>
                            <div>1</div>
                        </option>
                        <option>2</option>
                        <option>3</option>
                    </select>

                    <input type="text" placeholder="Insira a idade 1" id="n1">
                    <input type="text" placeholder="Insira a idade 2" id="n2">
                    <input type="text" placeholder="Insira a idade 3" id="n3">
                </form>

                <button class="log" onclick="dependente(); sumir2()">Visualizar Mensalidade</button>
            </div>
        </center>
    </div>

    <div class="box4" id="bx3">
        <center>
            <div class="caixa">
                <p>Orçamento:</p>
                <form action="#" method="POST">
                    <input type="text" name="nome" placeholder="Nome" id="nome2" readonly>
                    <input type="text" placeholder="ident" id="ident2" readonly>
                    <input type="text" name="total" placeholder="Valor" id="valor2" readonly>
                    <input type="text" name="idade" placeholder="Idade" id="idade3" readonly>
                    <input type="text" name="plano" placeholder="Entidade" id="tipo2" readonly>

                    <button class="log" type="submit" name="cadastrar">Confirmar</button><button type="" class="log2">Cancelar</button>
                </form>

            </div>
        </center>
    </div>

    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

</body>

</html>