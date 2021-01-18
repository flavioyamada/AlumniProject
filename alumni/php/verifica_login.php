<?php
    //recupera dados do login
    session_start();
    //conecta
    include ('conecta.php');
    
    $email = $_GET['email'];   
    $senha = $_GET['senha'];

    $verifica_OK = 0;

    
    $sql_verifica = "SELECT email, senha FROM cadastro_cliente
                      WHERE email = '$email'
                        AND senha = '$senha' ";
    //verifica ‹o
    
    $result=mysqli_query($conecta,$sql_verifica);
    
    while($consulta=mysqli_fetch_array($result))
    {
        //Existe este usuario
        //Redirecionamento -> OK.php
        $verifica_OK = 1;
        $_SESSION["email"] = $consulta["email"];
        $_SESSION["senha"] = $consulta["senha"];

        header('location:../index1.php');

    }
    


    if ($verifica_OK == 0) {
    echo "
      <script> alert('login incorreto');</script>
      <meta HTTP-EQUIV= 'Refresh' CONTENT='0;URL=http://127.0.0.1/alumni/login.html'> ";
          

      

  //echo $sql;

}


    
?>