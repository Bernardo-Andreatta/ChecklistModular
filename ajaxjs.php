<?php
    require ('conexao.php');
    $descricao = $_POST['ajax_desc'];

    $sql = $pdo->prepare("INSERT INTO `checklist` (descricao) VALUES (?)");
    $sql->execute(array($descricao));

?>