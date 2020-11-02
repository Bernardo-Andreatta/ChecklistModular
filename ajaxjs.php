<?php
    require ('conexao.php');
    $descricao = $_POST['ajax_desc'];
    

    $sql = $pdo->prepare("INSERT INTO `checklist` (`id`, `descricao`, `problema`, `ncf`, `corretiva`, `prazo`, `situacao`, `excluido`) VALUES (NULL,?, NULL, NULL, NULL, NULL, NULL,NULL);");
    $sql->execute(array($descricao));

?>