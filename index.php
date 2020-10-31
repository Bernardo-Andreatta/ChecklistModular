<?php
    require ('conexao.php');

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $descricao = $_POST['descricao'];
        $corretiva = $_POST['corretiva'];
        $ncf = $_POST['ncf'];
        
        $sql = "SELECT prazo FROM ncf WHERE nome = :ncf";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":ncf", $ncf);
        $sql->execute();
        $prazo = $sql->fetch();

        $sql = $pdo->prepare("INSERT INTO `checklist` VALUES(?,?,?,?,?,NULL)");
        $sql->execute(array($id,$descricao,$ncf,$corretiva,$prazo['prazo']));

    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Checklist</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="./js/jquery.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <link rel="icon" type="image/png" href="img/favicon (1).ico">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <section class='container2'>
            <h1 class="titulo">Checklist</h1>
            <div class="clear"></div>

            <form method="POST" class="formulario">
                <table class="table">
                    <thead>
                        <tr>
                            <th >ID</th>
                            <th>Descrição</th>
                            <th>NCF</th>
                            <th>Corretiva</th>
                            <th>Prazo</th>
                            <th>Situação</th>
                            <th>#</th>
                        </tr>
                        
                        <tr>
                            <td><input type="text" name='id' id='id' class='validar'></td>
                            <td><textarea name='descricao' id='desc' class='validar'></textarea></td>
                            <td>
                                <select name='ncf' id='ncf' class='validar'>
                                    <option></option>
                                    <?php
                                        $sql2 = "SELECT * FROM ncf";
                                        $sql2 = $pdo->prepare($sql2);
                                        $sql2->execute();
                                        $dado2 = $sql2->fetchAll();
                                        foreach ($dado2 as $nivel) {
                                            ?>
                                            <option value="<?php echo $nivel['nome']?>"><?php echo $nivel['nome']?></option>
                                            <?php
                                        }
                                    ?>
                                </select>
                            </td>
                        
                            <td><textarea name='corretiva' id='action' class='validar'></textarea></td>
                            <td>-</td>
                            <td>-</td>
                            <td>
                                <button type="submit" name="submit">Enviar</button>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" value="1" class="teste"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <script src="./js/main.js"></script>
    </body>
</html>
