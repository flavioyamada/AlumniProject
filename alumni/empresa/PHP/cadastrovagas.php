<?php
   session_start();
   include 'conecta.php';
   header('content-type: text/html charset= utf-8');


   $titulo=$_POST["titulo"];
   $descricao=$_POST["descricao"];
   $salario=$_POST["salario"];

   

   mysqli_select_db($conecta,"alumni") or print(mysqli_error());
   $sql = "INSERT INTO vaga_emprego (titulo,descricao,salario)
           VALUES ('$titulo','$descricao', '$salario')";


    mysqli_query($conecta, $sql);

    mysqli_close($conecta);
echo "
      <script> alert('cadastro enviado com sucesso'); </script>
      <meta HTTP-EQUIV= 'Refresh' CONTENT='0;URL=http://127.0.0.1/alumni/empresa/vagas.php'>";
      ?>