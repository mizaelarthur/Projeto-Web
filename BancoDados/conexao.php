<?php  

$host = "localhost";
$user = "";
$senha = ""; 
$bd = "dogs";

$conn = new mysqli($host, $user, $senha, $bd);

if($conn->connect_error){
    echo "Falha na conexão";
}else{
    echo "Conexão bem sucedida";
}
?>


