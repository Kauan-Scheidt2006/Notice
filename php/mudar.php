<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <link rel="stylesheet" href="../css/mudar.css">
  <script src="../JavaScript/mudar.js"></script>
  <meta charset="UTF-8">
    <title>Notice Board</title>
    <link rel="shortcut icon" href="../favicon/favicon(1).ico" type="image/x-icon">
</head>
<body>
    <h1 id="title">ALTERAÇÃO DE DADOS</h1>
    
    <ul>
        <li><a href="http://localhost/desenvolvimento/avisos/html/index.html">Página Inicial</a></li>
        <li><a href="http://localhost/desenvolvimento/avisos/html/colegas.html">Colegas de Turma</a></li>
        <li><a href="http://localhost/desenvolvimento/avisos/html/prof.html">Ver Professores</a></li>
        <li><a href="http://localhost/desenvolvimento/avisos/php/dados.html">Ver dados de Perfil</a></li>
        <li><a href="http://localhost/desenvolvimento/avisos/php/enviar.php">Enviar Notificação</a></li>
        <li><a href="http://localhost/desenvolvimento/avisos/php/registrar.php">Cadastrar Nova Conta</a></li>    
    </ul>

    <form action="" method="post">
        <fieldset>
    <?php
        $name = isset($_POST['name']) ? $_POST['name'] : "";
    ?>

        <h2>Mudar Nome de Usuário</h2>
        
        <br>
        <label for="name">Digite o novo nome de usuário:</label>
        <input type="text" name="name" id="name" placeholder="Digite o Novo Nome" required onblur="nome ()">
        <input type="submit" value="Alterar" id="usuario">
        
        <br>

    <?php
        if(isset($_POST['name'])){
            echo"<h1 id='user'> O seu novo nome de usuário é $name";}
    ?>

    </fieldset>
    </form>

    <br><br><br><br>

    <form action="" method="post">
        <fieldset>
    <?php
    $pas = isset($_POST['pas']) ? $_POST['pas'] : "";
    $pas = sha1($pas);

    $pas2 = isset($_POST['pas2']) ? $_POST['pas2'] : "";
    $pas2 = sha1($pas2);
    ?>

            <h2>Mudar de senha</h2>     
            <label for="pas"><b>Digite sua senha:<b></label>
            <input type="password" name="pas" id="pas" placeholder="Digite Aqui">
      
            <br><br>

            <label for="pas2"><b>Digite novamente a senha:</b></label>
            <input type="password" name="pas2" id="pas2" placeholder="Confirme sua Senha" required onblur="mudar ()">
            <input type="submit" value="Alterar" id="senha">
            <br><br><br><br>

            <?php
            if(isset($_POST['pas']) && ($_POST['pas2'])){
            if($pas == $pas2){
        
                echo "<h1 id='confirma'> Senha alterada com sucesso <br>
                 $pas <br>
                 $pas2 </h1>";}}
             ?>

        </fieldset>
    </form>

<br><br><br><br>
    
    <form action="" method="post">
        <fieldset>
    <?php
        $rua = isset($_POST['rua']) ? $_POST['rua'] : "";

        $bairro = isset($_POST['bairro']) ? $_POST['bairro'] : "";
        
        $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : "";
    ?>

            <h2>Mudar de Endereço</h2>
            <label for="rua">Digite a Rua de moradia atual:</label>
            <input type="text" strtolower name="rua" id="rua" placeholder="Digite o nome da rua">
            <br><br><br>
            <label for="bairro">Digite o bairro de morada atual:</label>
            <input type="text" strtolower name="bairro" id="bairro" placeholder="Digite o nome do bairro">
            <br><br><br>
            <label for="cidade">Digite a cidade de moradia:</label>
            <input type="text" name="cidade" strtolower id="cidade" required onblur="endereço ()" placeholder="Digite o nome da cidade">
            <input type="submit" id="local" value="Alterar">
            <br><br><br>
            <?php
            if(isset($_POST['rua']) && ($_POST['bairro']) && ($_POST['cidade'])){
                echo "<h1 id='endereco'> Endereço alterado com sucesso <br>
                Rua: $rua <br>
                Bairro: $bairro <br>
                Cidade: $cidade </h1>";}
                 ?>
             
        </fieldset>
    </form>
</body>
</html>