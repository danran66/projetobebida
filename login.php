<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css"> 
</head>

<title><h1>Login</h1></title>

<!--LoginAdministrativo-->
<body>
    <form action="cadastroprod.php" autocomplete="off">
        <h1>LOGIN</h1>
        
        <div>
            <label for="matricula_num">Matricula</label>

            <div><input type="text" id="matricula_num" name="matricula_num"></div>
        </div>
        <br>              
                
        <div>
            <div><label for="senha_login">Senha</label></div>
            <div><input type="text" id="senha_login" name="senha_login"></div>
        </div>
        <br>
                   
        <div>
            <div><input type="submit" id="btn_salvar" name="btn_confirmar" value="Confirmar"></div>
        </div>

    </form>
</body>
</html>

