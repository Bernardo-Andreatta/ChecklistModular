<?php
    require ('conexao.php');

    $id = $_POST['ajax_id'];
    $descricao = $_POST['ajax_desc'];
    $corretiva = $_POST['ajax_corretiva'];
    $ncf = $_POST['ajax_ncf'];

    $sql = "SELECT prazo FROM ncf WHERE nome = :ncf";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":ncf", $ncf);
    $sql->execute();
    $prazo = $sql->fetch();

    $sql = $pdo->prepare("INSERT INTO `checklist` VALUES(?,?,?,?,?,NULL)");
    $sql->execute(array($id,$descricao,$ncf,$corretiva,$prazo['prazo']));

?>