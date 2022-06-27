<?php
include("conexao.php");
echo "<h4>Bairro Incluído com sucesso</h4><h3><a href='/Anderson/viacao_m31'>Voltar</a></h3>";
try{
    $passageiro=$_POST['nome'];
    $cidade=$_POST['cidade_passageiro'];
    $sql="INSERT INTO passageiro(nome, cidade_passageiro) VALUES ('$passageiro',$cidade)";
    $conn->query($sql);
}catch(PDOException $ex){
    echo "Erro ".$ex->getMessage();
}
?>