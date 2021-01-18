<?php
    include 'conecta.php';
    
    header('Content-Type: text/html; charset=utf-8');
    //Meta Charset no Arquivo (UFT-8)
    
   mysqli_select_db($conecta,"alumni") or
    print(mysqli_error());

     $id_cadastro_cliente    = $_GET['id_cadastro_cliente'];
    $nome=$_GET["nome"];
   $email=$_GET["email"];
   $senha=$_GET["senha"];
  $nascimento=$_GET["nascimento"];
   $genero=$_GET["genero"];
  $curso=$_GET["curso"];
   $dt_clonc=$_GET["dt_clonc"];
   $telefone_cell=$_GET["telefone_cell"];
   $rg=$_GET["rg"];
   $cpf=$_GET["cpf"];
   $cep=$_GET["cep"];
   $estado=$_GET["estado"];
   $cidade=$_GET["cidade"];
   $bairro=$_GET["bairro"];
   $rua=$_GET["rua"];
   $complemento=$_GET["complemento"];
   $numero=$_GET["numero"];
   


   

    $sql = "UPDATE cadastro_cliente
               SET  nome       ='$nome',
                   email         = '$email',
                   senha        = '$senha',
                   nascimento        = '$nascimento',
                   genero        = '$genero',
                   curso        = '$curso',
                   dt_clonc        = '$dt_clonc',
                   telefone_cell        = '$telefone_cell',
                   rg        = '$rg',
                   cpf        = '$cpf',
                   cep         = '$cep',
                   estado        = '$estado',
                   cidade         = '$cidade',
                   bairro         = '$bairro',
                   rua        = '$rua',
                   complemento         = '$complemento',
                   numero        = '$numero'
            WHERE id_cadastro_cliente = $id_cadastro_cliente";    
    echo $sql;
    mysqli_query($conecta,$sql);
        
    //encerra a conexão.
    mysqli_close($conecta);
    {
     header('location:edaluno.php');
}
?>