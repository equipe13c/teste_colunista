<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
         <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <fieldset id="frmNovoUsuario">
        <form name="formulario" action="inserirUsuarioNovo.php" id="cadastroForm" method="post" onSubmit="return validar();"> 
             <label class="stringNovoUsuario">Nome:</label>            <input type="text" class="txtsNovoUsuario" size='35' name="nome" placeholder="Nome de Acesso"/> <br/>
             <label class="stringNovoUsuario">E-mail:</label>          <input type="email" class="txtsNovoUsuario" size='35' name="email" id="email" placeholder="Digite seu E-mail"/> <br/>
             <label class="stringNovoUsuario">Confirmar E-mail:</label><input type="email" class="txtsNovoUsuario" size='35' id="confirmemail" name="confirmemail" placeholder="Digite seu E-mail"/> <br/>
             <label class="stringNovoUsuario">Senha:</label>           <input type="password" class="txtsNovoUsuario" size='35' name="senha" placeholder="Senha"/> <br/>
             <label class="stringNovoUsuario">Confirmar Senha:</label> <input type="password" class="txtsNovoUsuario" size='35'name="confirmsenha" placeholder="Confirmar Senha"/> <br/>
             <label class="stringNovoUsuario">Data Nasc.:</label>      <input type="date" class="txtsNovoUsuario" name="dataNasc"/> <br/>
             <label class="stringNovoUsuario">Tipo:</label>
             <select name="tipoUser">
                    <option selected value="1">ADM</option>
                    <option value="2">RES</option>
                    <option value="3">COL</option>
             </select><br/><br/>
             <input type="submit" name="cadastrar" value="Cadastrar"/>
             <input type="reset" name="limpar" value="Limpar"/>
        </form>
        </fieldset>
   </body>
</html>