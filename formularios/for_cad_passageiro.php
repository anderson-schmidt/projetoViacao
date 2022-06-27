<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../estilos/vm31.css">
    <title>Viação M31</title>
</head>
<body> 
    <form method="POST" action="../controles/cad_passageiro.php">
        <h1>Cadastro de Passageiro</h1>
        <div class="flex-container">
            <div id="box">
                <table>
                <tr>
                    <td>
                        <label>Nome do Passageiro</label>
                    </td>
                    <td>
                        <input type="text" name="nome">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Cidade do Passageiro</label>
                    </td>
                    <td>
                        <input type="number" name="cidade_passageiro">
                    </td>
                </tr>
                <tr>
                    <td>
                        <td>
                            <input type="submit" value="Cadastrar">
                        </td>
                        <td>
                            <input type="button" value="Voltar" onclick="history.go(-1)">
                        </td>
                    </td>
                </tr>
                </table>
            </div>
        </div>
    </form>
</body>

</html>