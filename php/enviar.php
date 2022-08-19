<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="shortcut icon" href="../favicon/favicon(1).ico" type="image/x-icon">
    <?php
$para = isset($_POST['para']) ? $_POST['para']: "";

$usuario = isset($_POST['usuario']) ? $_POST['usuario']: "";

$assunto = isset($_POST['assunto']) ? $_POST['assunto']: "";

$conteudo = isset($_POST['conteudo']) ? $_POST['conteudo']: "";

$gravidade = isset($_POST['gravidade']) ? $_POST['gravidade']: "";
?>
    <meta charset="UTF-8">
    <link rel="stylesheet"  href="../css/enviar.css">
    <title>Notice Board</title>
      
</head>
<body>
<fieldset class="menu">
        <img src="../img/logo-ifc.png" alt="IFC" id="IFC">
        <ul>
            <li><a href="http://localhost/desenvolvimento/avisos/html/index.html">Página Inicial</a></li>
            <li><a href="http://localhost/desenvolvimento/avisos/html/prof.html">Ver Professores</a></li>
            <li><a href="http://localhost/desenvolvimento/avisos/html/colegas.html">Colegas de Turma</a></li>
            <li><a href="http://localhost/desenvolvimento/avisos/php/dados.html">Ver dados de Perfil</a></li>
            <li><a href="http://localhost/desenvolvimento/avisos/php/registrar.php">Registrar Nova Conta</a></li>
            <li><a href="http://localhost/desenvolvimento/avisos/php/enviar.php">Enviar Notificação</a></li>
    </fieldset>
    
    <h1 id="titulo">Enviar Notificações</h1>
    <form action="" method="post">
    <fieldset style = "background-image: url(../img/comunicado.jpg)">
        <label for="usuario">Para qual usuário:</label>
        <input type="text" name="usuario" id="usuario" value="<?php $usuario?>">
        <br><br>
        <label for="para">Endereço de E-mail:</label>
        <input type="email" name="para" id="para" value="<?php $para?>">
        <br><br>
        <label for="assunto">Assunto:</label><br>
        <textarea name="assunto" id="assunto" cols="50" rows="02" value="<?php $assunto?>"></textarea>
        <br><br>
        <label for="conteudo">Escreva o conteúdo:</label><br>
        <textarea name="conteudo" id="conteudo" cols="70" rows="10" placeholder="Insira o conteúdo" value="<?php $conteudo?>"></textarea> 
        <br><br><br>
        
       <br><br> 
       <label for="gravidade">Nível de Gravidade:</label>
       <br><br><input type="radio" name="gravidade" id="gravidade" value="<h3 style = 'color:green'> Baixo</h3>" 
       <?php if ($gravidade == "<h3 style = 'color:green'> Baixo</h3>") echo "checked";?> checked>Baixo

       <br><br><input type="radio" name="gravidade" id="gravidade" value="<h3 style = 'color: gold'>Moderado</h3>"
       <?php if($gravidade == "<h3 style = 'color:gold'> Moderado</h3>") echo "checked";?>>Moderado

       <br><br><input type="radio" name="gravidade" id="gravidade" value="<h3 style = 'color: orangered'>Urgente</h3>" 
       <?php if($gravidade == "<h3 style = 'color:orangered'> Urgente</h3>") echo "checked";?>>Urgente
      
       <br><br><input type="radio" name="gravidade" id="gravidade" value="<h3 style = 'color: red'>Emergente</h3>"
       <?php if($gravidade == "<h3 style = 'color:red'> Emergente</h3>") echo "checked";?>>Emergente
      <br><br>
       
<ul>
<li id="cor01">Baixo</li>
<li id="cor02">Moderado</li>
<li id="cor03">Urgente</li>
<li id="cor04">Emergente</li>
</ul> 
       <br><br><br><br><br>
    <input type="submit" value="Enviar">
    </fieldset>
    </form>
    <br><br><br><br>
    <?php
    if(isset($_POST['para']) && ($_POST['usuario']) && ($_POST['assunto']) && ($_POST['conteudo']))  
    echo "<fieldset style = 'background-image: url(../img/fundo.webp)'> $gravidade <br><br>
    <p>Usuário de destino:<br> $usuario <br><br> 
    Para: <br> $para <br><br>                               
    Assunto:<br> $assunto <br><br>
    Conteúdo: <br> <textarea>$conteudo</textarea> </p> </fieldset>";?>
    

</body>
</html>