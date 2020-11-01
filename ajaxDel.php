<?php
    require ('conexao.php');
    $del = $_POST['ajax_del'];
    $id = $_POST['ajax_id'];
    

    $sql = $pdo->prepare("UPDATE `checklist` SET `excluido` = '1' WHERE `checklist`.`id` = $id;");
    $sql->execute(array($del));

?>