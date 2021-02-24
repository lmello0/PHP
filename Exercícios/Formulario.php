<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Formulario_recebe.php" method="POST">
        Código: <input type="number" name="codigo"/> </br></br>
        Nome: <input type="text" name="nome" /> </br></br>
        Quantidade: <input type="number" name="quantidade"/> </br></br>
        Unidade (1 - 10): <input type="range" name="unidade" min="0" max="10" step="1"/> </br></br>
        Preço: <input type="number" name="preco"  step="0.01" min="0"/> </br></br>
        <input type="Submit" value="Enviar" name="Enviar" />
        <input type="Reset" value="Limpar" name="Limpar"/>   
    </form>
</body>
</html>
