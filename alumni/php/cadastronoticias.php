<?php
   session_start();
   include 'conecta.php';
   header('content-type: text/html charset= utf-8');


   $tema=$_POST["tema"];
   $data=$_POST["data"];
   $descricao=$_POST["descricao"];

   

   mysqli_select_db($conecta,"alumni") or print(mysqli_error());
   $sql = "INSERT INTO noticias (tema,data,descricao)
           VALUES ('$tema','$data', '$descricao')";


    mysqli_query($conecta, $sql);

    mysqli_close($conecta);
echo "
      <script> alert('cadastro enviado com sucesso'); </script>
      <meta HTTP-EQUIV= 'Refresh' CONTENT='0;URL=http://127.0.0.1/alumni/adm/noticias.php'>";
      ?>