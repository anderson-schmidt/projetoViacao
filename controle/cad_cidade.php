<?php
include("conexao.php");
echo "<h4>Bairro Incluído com sucesso</h4><h3><a href='/Anderson/viacao_m31'>Voltar</a></h3>";
try{
    $cidade=$_POST['cidade'];
    $sql="INSERT INTO cidade(cidade) VALUES ('$cidade')";
    $conn->query($sql);
}catch(PDOException $ex){
    echo "Erro ".$ex->getMessage();
}
?>