<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$msg = filter_input(INPUT_POST, 'msg', FILTER_SANITIZE_STRING);

$result_usuario = "INSERT INTO mensagem (nome, email, msg) VALUES ('$nome', '$email', '$msg')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
     echo ("<SCRIPT LANGUAGE='JavaScript'>
     window.alert('Mensagem enviada com sucesso')
     window.location.href='index.html';
     </SCRIPT>");
}else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Mensagem não enviada')
    window.location.href='index.html';
    </SCRIPT>");
}
?>
