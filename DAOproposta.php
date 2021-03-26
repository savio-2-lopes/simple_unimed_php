<?php

class PropostaDAO
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = new Conexao();
    }

    public function cadastra($nome, $idade, $plano, $total)
    {
        $sql = "INSERT INTO unimed (nome,idade,plano,total) VALUES ('$nome','$idade','$plano','$total')";
        $executa = mysqli_query($this->conexao->getCon(), $sql);

        if (mysqli_affected_rows($this->conexao->getCon()) > 0) {
            return true;
        } else {
            return false;
        }
    }
}
