<?php
   session_start();
   include 'conecta.php';
   header('content-type: text/html charset= utf-8');


   $nsocial=$_POST["nsocial"];
   $nficticio=$_POST["nficticio"];
   $cnpj=$_POST["cnpj"];
  $cep=$_POST["cep"];
   $estado=$_POST["estado"];
  $cidade=$_POST["cidade"];
   $bairro=$_POST["bairro"];
   $rua=$_POST["rua"];
   $telefone=$_POST["telefone"];
   $email=$_POST["email"];
   $senha=$_POST["senha"];
   

   mysqli_select_db($conecta,"alumni") or print(mysqli_error());


    $sql=('INSERT INTO empresa (nsocial,nficticio,cnpj,cep,estado,cidade,bairro,rua,telefone,email,senha) VALUES("'.$nsocial.'","'.$nficticio.'",'.$cnpj.','.$cep.',"'.$estado.'","'.$cidade.'","'.$bairro.'","'.$rua.'","'.$telefone.'","'.$email.'","'.$senha.'");');


    mysqli_query($conecta, $sql);

    mysqli_close($conecta);
      echo "
      <script> alert('cadastro enviado para analise'); </script>
      <meta HTTP-EQUIV= 'Refresh' CONTENT='0;URL=http://127.0.0.1/alumni/empresa/login.html'>";
  //echo $sql; my 

?>