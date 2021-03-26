<?php
session_start();

if (isset($_POST['submit'])) {
    require_once('conexao.php');
    require_once('DAOproposta.php');

    $submit = new PropostaDAO();

    $nome = trim(strip_tags($_POST['nome']));
    $idade = trim(strip_tags($_POST['idade']));
    $categoria_plano = trim(strip_tags($_POST['tipo']));
    $total = trim(strip_tags($_POST['valor']));

    $insere = $submit->cadastra($nome, $idade, $categoria_plano, $total);
}
?>

<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compartible" content="IE=edge">

    <title>Dashboard / Unimed!</title>

    <link rel="icon" type="image/png" href="https://sengece.org.br/wp-content/uploads/2020/04/unimed-logo-1-2.png" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="header">
        <img class="unim" src="https://sengece.org.br/wp-content/uploads/2020/04/unimed-logo-1-2.png" alt="LOGO UNIMED">
    </div>

    <div class="box1" id="bx">
        <center>
            <div class="caixa">
                <p>Insira seu dados:</p>
                <form>
                    <input type="text" placeholder="Nome" id="nome">
                    <input type="text" placeholder="Idade" id="idade">
                    <select class="selecionar" id="tipo">
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
                    <input type="text" name="valor" placeholder="Valor" id="valor2" readonly>
                    <input type="text" name="idade" placeholder="Idade" id="idade3" readonly>
                    <input type="text" name="tipo" placeholder="Entidade" id="tipo2" readonly>
                    <button class="log" type="submit" name="submit">Confirmar</button><button type="" class="log2">Cancelar</button>
                </form>

            </div>
        </center>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

</body>

</html>