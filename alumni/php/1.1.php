<?php
   session_start();
   include 'conecta.php';
   header('content-type: text/html charset= utf-8');


   $nome=$_POST["nome"];
   $email=$_POST["email"];
   $senha=$_POST["senha"];
  $nascimento=$_POST["nascimento"];
   $genero=$_POST["genero"];
  $curso=$_POST["curso"];
   $dt_clonc=$_POST["dt_clonc"];
   $telefone_cell=$_POST["telefone_cell"];
   $rg=$_POST["rg"];
   $cpf=$_POST["cpf"];
   

   mysqli_select_db($conecta,"alumni") or print(mysqli_error());


    $sql=('INSERT INTO cadastro_cliente (nome,email,senha,nascimento,genero,curso,dt_clonc,telefone_cell,rg,cpf) VALUES("'.$nome.'","'.$email.'","'.$senha.'","'.$nascimento.'","'.$genero.'","'.$curso.'","'.$dt_clonc.'","'.$telefone_cell.'",'.$rg.',"'.$cpf.'");');


    mysqli_query($conecta, $sql);

    mysqli_close($conecta);
      echo "
      <script> alert('cadastro enviado para analise'); </script>
      <meta HTTP-EQUIV= 'Refresh' CONTENT='0;URL=http://127.0.0.1/alumni/login.html'>";
  //echo $sql; my 

?>