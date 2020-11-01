<?php
    require('conexao.php');

    $sql = $pdo->prepare('SELECT * FROM `checklist` WHERE `excluido` = 0');
    $sql->execute();
    $checks = $sql->fetchAll();

    echo json_encode($checks);
?>