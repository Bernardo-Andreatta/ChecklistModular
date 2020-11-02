<?php
    require ('conexao.php');

    $id = $_GET["id"];
    $sql = $pdo->prepare("SELECT * FROM `checklist`WHERE `checklist`.`id` = $id;");
    $sql->execute();
    $checks = $sql->fetch();

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="./js/jquery.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <link rel="icon" type="image/png" href="img/favicon.ico">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <section class='container2'>
            <img src="img/217-2173993_bullets-list-checkbox-comments-icon.png" class = "icon">
            <h1 class="titulo">Checklist</h1>
            <div class="clear"></div>

            <form method="POST" id="form1">
                
            <input type="hidden" name = "id" value= "<?php echo $id ?>">

               <textarea  name= "desc" id="desc" class='validar'><?php echo $checks[1] ?></textarea>

               <textarea  name="prob" id="prob" class='validar'><?php echo $checks[2] ?></textarea>

               <select name='ncf' id='ncf' class='validar'>

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

                <textarea name="acao" id="acao" class='validar'><?php echo $checks[4] ?></textarea>

                <select name="sit" id="sit" class='validar'>
                    <option value="Atingido">Atingido</option>
                    <option value="Nao atingido">Nao atingido</option>
                    <option value="Nao aplicavel">Nao aplicavel</option>
                </select>


                <button id="submit" onclick = "updateValues()" type="submit" value="Submit"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-check2-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z"/>
                                </svg>
                </button>

            </form> 

     </section>
     
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <script src="./js/update.js"></script>
    </body>
        
</html>
