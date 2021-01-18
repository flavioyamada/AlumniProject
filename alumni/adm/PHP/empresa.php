Alumni<?php

    session_start();
    
           
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Empresas</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="../css/estilo1.css" />

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.15/datatables.min.css"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper" class="fullheight">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php">Alumni</a>
            </div>
            <!-- Top Menu Items -->
              <?php
                include('menu_usuario.php');
            ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="../index.php"><i class="fa fa-fw fa-dashboard"></i> Alumni</a>
                    </li>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="../index.php"><i class="fa fa-fw fa-dashboard"></i> Alumni</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper" class="fullheight">
<h3>Alunos Cadastrados</h3>
            <div class="container-fluid">
            <!-- #################################################################### -->
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12" style="overflow-x:auto">
                        <table id="datat" class="table table-hover table-bordered"><!--17-->
                            <thead>
                                <tr>
                                    <th>Nome Social</th>
                                    <th>Nome Ficticio</th>
                                    <th>cnpj</th>
                                    <th>CEP</th>
                                    <th>Estado</th>
                                    <th>Cidade</th>
                                    <th>Bairro</th>
                                    <th>Rua</th>
                                    <th>telefone</th>
                                    <th>email</th>
                                    <th>senha</th>
                                    <th>função</th>

                                </tr>
                            </thead>
                            <tbody>

                            <?php

                            include 'conecta.php';
                            mysqli_select_db($conecta, 'alumni') or print(mysqli_error());
                            $sql = 'SELECT * FROM `empresa`';
                            $result = mysqli_query($conecta, $sql);

                            While($consulta = mysqli_fetch_array($result)) {
                                echo "<tr>
                                <td>$consulta[nsocial]</td>
                                <td>$consulta[nficticio]</td>
                                <td>$consulta[cnpj]</td>
                                <td>$consulta[cep]</td>
                                <td>$consulta[estado]</td>
                                <td>$consulta[cidade]</td>
                                <td>$consulta[bairro]</td>
                                <td>$consulta[rua]</td>
                               <td>$consulta[telefone]</td>
                               <td>$consulta[email]</td>
                                <td>$consulta[senha]</td>

                                
                                
                                
                                

                                <td>
                                <a?id_emp=$consulta[id_emp]'>Editar</a>
                                </td>
                                </tr>";
                            }
                            mysqli_free_result($result);
                            mysqli_query($conecta, $sql);
                            mysqli_close($conecta);

                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.row -->
                <!-- ################################################################################## -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="datatables.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#datat').DataTable();
        });
    </script>

    <script>
        function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('estado').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('estado').value=(conteudo.uf);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('estado').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };
    </script>

</body>

</html>
