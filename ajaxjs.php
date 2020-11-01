<?php
    require ('conexao.php');
    $descricao = $_POST['ajax_desc'];

    $sql = $pdo->prepare("INSERT INTO `checklist`  VALUES (NULL, ?, NULL, NULL, NULL, NULL, NULL, NULL);");
    $sql->execute(array($descricao));

?>