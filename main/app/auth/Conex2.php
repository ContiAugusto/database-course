<?php

$server = "localhost";
$user = "root";
$pass = "";
$db2 = "Norma";

$conexao = mysqli_connect($server, $user, $pass, $db2);
 

if ($conexao) {
    echo '<script> alert ("Conectado com sucesso!"); </script>';
}
else
{
    echo '<script> alert ("Falha ao conectar com o banco de dados"); </script>';
}