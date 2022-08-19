<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="shortcut icon" href="../favicon/favicon(1).ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/resgistrar.css">
    <script>
        alert("Registrre-se na comunidade online Notice Board pais e responsáveis"  + "\n" +
        "e receba notificações de informações de seus filhos.")

    </script>
    <?php
    $nome = isset($_POST['nome']) ? $_POST['nome']: "";
    
    $idade = isset($_POST['idade']) ? $_POST['idade']: "";
    
    $cpf = isset($_POST['cpf']) ? $_POST['cpf']: "";

    $email = isset($_POST['email']) ? $_POST['email']: "";
    
    $pas = isset($_POST['pas']) ? $_POST['pas'] : "";
    $pas = sha1($pas);
    
    $pas2 = isset($_POST['pas2']) ? $_POST['pas2']: "";
    $pas2 = sha1($pas2);
    ?>
    <meta charset="UTF-8">
    <title>Notice Board</title>
</head>
<body>
    <h1 id="h1">NOTICE BOARD</h1>
    <h2 id="h2">Cadastramento de Comunidade Online</h2>
    <form action="" method="post">
        <fieldset>
            <label for="nome">Digite seu nome:</label>
            <input type="text" name="nome" id="nome">
            <br><br><br>
            <label for="idade">Insira sua idade:</label>
            <input type="number" name="idade" id="idade">
            <br><br><br>
            <label for="cpf">Digite seu CPF:</label>
            <input type="number" name="cpf" id="cpf">
            <br><br><br>
            <label for="email">Digite seu E-mail:</label>
            <input type="email" name="email" id="email">
            <br><br><br>
            <label for="pas">Digite a senha:</label>
            <input type="password" name="pas" id="pas">
            <br><br><br>
            <label for="pas2">Confirme sua senha:</label>
            <input type="password" name="pas2" id="pas2">
            <a href="http://index.html"><input type="submit" value="Registrar"></a>
               <br><br><br><br>
            <?php
            if(isset($_POST['nome']) && ($_POST['idade']) && ($_POST['cpf']) &&
            ($_POST['email']) && ($_POST['pas2']) && $pas == $pas2){ 
                echo"Veja seu cadastro aqui:
             <h2> Nome: $nome <br> 
                  Idade: $idade <br>
                  CPF: $cpf <br>
                  E-mail: $email <br>
                  Senha: $pas</h2>";
                 
            }

            ?>
        </fieldset>
    </form>

</body>
</html>