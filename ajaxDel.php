<?php
    require ('conexao.php');
    $id = $_POST['ajax_id'];
    date_default_timezone_set('America/Sao_Paulo');
    $date = date('Y-m-d H:i:s', time());

    $sql = $pdo->prepare("UPDATE `checklist` SET `excluido` = '$date' WHERE `checklist`.`id` = $id;");
    $sql->execute();

?>