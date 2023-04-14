<?php
include "conexao.php";

$tamanho = $_POST["tamanho"];
$carrinho = $_POST["carrinho"];


$sql->query("insert into carrinho(codigo, tamanho, carrinho)values(null, '$tamanho', '$carrinho')");

header('location: ../index.html');
?>