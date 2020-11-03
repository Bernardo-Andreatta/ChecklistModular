<?php
    require ('php/conexao.php');
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
        <link rel="icon" type="image/png" href="img/favicon.ico">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <section class='container2'>
            <img src="img/217-2173993_bullets-list-checkbox-comments-icon.png" class = "icon">
            <h1 class="titulo">Checklist</h1> 
            <h2 class="aderencia">Aderência: </h2>
            <div class="clear"></div>
            <a href="php/add.php" class="add"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-journal-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
            <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
            <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z"/>
            </svg>  Adicionar não conformidade</a>
            <div class="clear"></div>

            <form method="POST" class="formulario">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Descrição</th>
                            <th>Problema</th>
                            <th>NCF</th>
                            <th>Corretiva</th>
                            <th>Prazo</th>
                            <th>Situação</th>
                            <th>#</th>
                        </tr>
                        
                        <tr>
                            <td>-</td>
                            <td class = 'desc'> 
                                <textarea name='descricao' id='desc' class='validar' placeholder='Digite aqui a descrição da proxima linha a ser adicionada!' onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Digite aqui a descrição da proxima linha a ser adicionada!'"></textarea>
                            </td>
                            <td class = 'desc'>-</td>
                            <td>-</td>
                            <td class = 'desc'>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>
                                <button id="submit" onclick="sendValues()" type="submit" value="Submit"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-check2-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z"/>
                                </svg></button>
                            </td>
                        </tr>
                        
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                </form>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <script src="./js/main.js"></script>
    </body>
</html>
