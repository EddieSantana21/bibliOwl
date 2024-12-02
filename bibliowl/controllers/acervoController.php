<?php
$model = require_once "../Model/Acervo.php";

function cadastrarAcervo(
    private $tituloAcervo,
    private $dtLancamento,
    private $qtdAcervo,
    private $codBarrasAcervo,
    private $isbnAcervo,
    private $prateleiraAcervo,
    private $gondolaAcervo,
    private $numChamadaAcervo,
    private $statusAcervo,
    private $autor,
    private $usuario,
    private $tipoIdentificacao,
    private $editora,
    private $genero
) {
    $model.cadastrar();
}

    $controller.cadastrarAcervo();
?>