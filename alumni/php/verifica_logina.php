<?php
    //recupera dados do login
    session_start();
    //conecta
    include ('conecta.php');
    
    $usuario = $_GET['usuario'];   
    $senha = $_GET['senha'];

    $verifica_OK = 0;

    
    $sql_verifica = "SELECT usuario, senha FROM tabela_adm
                      WHERE usuario = '$usuario'
                        AND senha = '$senha' ";
    //verifica ‹o
    
    $result=mysqli_query($conecta,$sql_verifica);
    
    while($consulta=mysqli_fetch_array($result))
    {
        //Existe este usuario
        //Redirecionamento -> OK.php
        $verifica_OK = 1;
        $_SESSION["usuario"] = $consulta["usuario"];
        $_SESSION["senha"] = $consulta["senha"];

        header('location:../adm/index.php');

    }
    


    if ($verifica_OK == 0) {
    echo "
      <script> alert('login incorreto');</script>
      <meta HTTP-EQUIV= 'Refresh' CONTENT='0;URL=http://127.0.0.1/alumni/logina.html'> ";
        
  //echo $sql;
}


    
?>