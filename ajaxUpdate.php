<?php
    require ('conexao.php');

    $id = $_POST['id'];
    $desc = $_POST['desc']; 
    $prob = $_POST['prob'];     
    $ncf = $_POST['ncf'];           
    $acao = $_POST['acao'];            
    $sit = $_POST['sit'];           
           
    
    $sql = $pdo->prepare("SELECT `prazo` FROM `ncf` WHERE `nome` = $ncf;");
    $sql->execute();
    $prazo = $sql->fetch();

    $sql = $pdo->prepare("UPDATE `checklist` 
    SET (`descricao`, `problema`,`ncf`,`corretiva`,`prazo`,`situacao`) VALUES (?,?,?,?,?,?)
    WHERE `checklist`.`id` = $id;");
    $sql->execute(array($desc,$prob,$ncf,$acao,$prazo,$sit));

?>