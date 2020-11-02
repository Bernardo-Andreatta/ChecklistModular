<?php
    require ('conexao.php');

    $id = $_POST['ajax_id'];
    $desc = htmlentities($_POST['ajax_desc']); 
    $prob = htmlentities($_POST['ajax_prob']);     
    $ncf = $_POST['ajax_ncf'];           
    $acao = htmlentities($_POST['ajax_acao']);            
    $sit = $_POST['ajax_sit'];           
           
    
    $sql = $pdo->prepare("SELECT `prazo` FROM `ncf` WHERE `ncf`.`nome` = '$ncf' ;");
    $sql->execute();
    $prazo = $sql->fetch();

    $sql = $pdo->prepare("UPDATE `checklist`
    SET `descricao` = '$desc', `problema` = '$prob', `ncf` = '$ncf', `corretiva` = '$acao', `prazo` = '$prazo[0]', `situacao` = '$sit'
    WHERE `checklist`.`id` = $id ;");
    $sql->execute();

?>