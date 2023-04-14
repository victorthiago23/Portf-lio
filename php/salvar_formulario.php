<?php
include "conexao.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$data = $_POST["data"];
$gostou = $_POST["gostou"];
$clone = $_POST["clone"];

$sql->query("insert into formulario(codigo, nome, email, data, gostou, clone)values(null,'$nome', '$email', '$data', '$gostou', '$clone')");

header('location: ../index.html');

?>