<!DOCTYPE html>
<html>
    <head>
        <title>Página Inicial</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <h3>Index ADM</h3><br/>
        <section>
        <fieldset id="backPerfil">
            <?php             
             include '../includes/funcoesUteis.inc';
             include '../conexao/conecta.inc';
             validaAutenticacao('../index.php', '1');
             echo "<br/>";
             echo "<a target='tela' href='perfil.php'> Alterar Dados </a><br/>";
             echo "<a target='tela' href='listarUsuarios.php'> Listar Dados </a><br/>";
             echo "<a target='tela' href='novoUsuario.php'> Novo Usuário </a><br/>";  
             echo "<a href='sair.php'> Logout </a>";           
            ?>
        </fieldset>
            <fieldset id="backIframe">
                <iframe id="tela" name="tela"></iframe>
            </fieldset>
        </section>
    </body>
</html>

