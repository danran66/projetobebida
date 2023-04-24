<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="../css/cadastroprod.css"> 
    
</head>

<title><h1>Cadastro de Produtos</h1></title>

<!--LoginAdministrativo-->
<body>
    <form action="cadastroforn.php"autocomplete="off">
        <h1>CADASTRO DE PRODUTOS</h1>
        
        <div>
            <label for="codigo_forn">Codigo do Produto</label>

            <div><input type="text" id="codigo_forn" name="codigo_forn"></div>
        </div>
        <br>              
                
        <div>
            <div><label for="descricao_prod">Descricao do Produto</label></div>
            <div><input type="text" id="descricao_prod" name="descricao_prod"></div>
        </div>
        <br>

        <div>
            <div><label for="estoq_inicial">Estoque Inicial</label></div>
            <div><input type="text" id="estoq_inicial" name="estoq_inicial"></div>
        </div>
        <br>

        <div>
            <div><label for="estoq_atual">Estoque Atual</label></div>
            <div><input type="text" id="estoq_atual" name="estoq_atual"></div>
        </div>
        <br>

        <div>
            <div><label for="valor_compra">Valor de Compra</label></div>
            <div><input type="text" id="valor_compra" name="valor_compra"></div>
        </div>
        <br>

        <div>
            <div><label for="valor_venda">Valor de Venda</label></div>
            <div><input type="text" id="valor_venda" name="valor_venda"></div>
        </div>
        <br>

        <div>
            <div><label for="name_fornec">Nome Fornecedor</label></div>
            <div><input type="text" id="name_fornec" name="name_fornec"></div>
        </div>
        <br>
                   
        <div>
            <div><input type="submit" id="btn_salvar" name="btn_confirmar" value="Confirmar"></div>
        </div>
            
    </form>
</body>
</html>

