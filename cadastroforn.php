<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="../css/cadastroforn.css"> 
    
</head>

<title><h1>Cadastro de Fornecedores</h1></title>

<!--LoginAdministrativo-->
<body>
    <form autocomplete="off">
        <h1>CADASTRO DE FORNECEDORES</h1>
        
        <div>
            <label for="codigo_forn">Codigo do Fornecedor</label>

            <div><input type="text" id="codigo_forn" name="codigo_forn"></div>
        </div>
        <br>              
                
        <div>
            <div><label for="name_fornec">Nome do Fornecedor</label></div>
            <div><input type="text" id="name_fornec" name="name_fornec"></div>
        </div>
        <br>

        <div>
            <div><label for="cnpj">CNPJ</label></div>
            <div><input type="text" id="cnpj" name="cnpj"></div>
        </div>
        <br>

        <div>
            <div><label for="telefone_forn">Telefone</label></div>
            <div><input type="text" id="telefone_forn" name="telefone_forn"></div>
        </div>
        <br>

        <div>
            <div><label for="email_forn">E-mail do Fornecedor</label></div>
            <div><input type="text" id="email_forn" name="email_forn"></div>
        </div>
        <br>

        <div>
            <div><label for="ende_forn">Endereco do Fornecedor</label></div>
            <div><input type="text" id="ende_forn" name="ende_forn"></div>
        </div>
        <br>
                   
        <div>
            <div><input type="submit" id="btn_salvar" name="btn_confirmar" value="Confirmar"></div>
        </div>
            
    </form>
</body>
</html>

