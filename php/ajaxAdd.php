<?php
    require ('conexao.php');
    
    $nome = $_POST['ajax_nome'];
    $prazo = $_POST['ajax_prazo'];

    $sql = $pdo->prepare("INSERT INTO `ncf` (`id`, `nome`, `prazo`) VALUES (NULL,?,?);");
    $sql->execute(array($nome,$prazo));

?>