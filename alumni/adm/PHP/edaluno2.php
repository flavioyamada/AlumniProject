<?php

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

    <title>Edição de Aluno</title>

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
                     
                        </ul>  
            </div>
            <!-- /.navbar-collapse -->
        </nav>

         <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edição de Alunos</h1>
                </div>
                     </div>

                            <?php

                            include 'conecta.php';
                                $id_cadastro_cliente = $_GET['id_cadastro_cliente'];

                            mysqli_select_db($conecta, 'alumni') or print(mysqli_error());
                            $sql = "SELECT * FROM cadastro_cliente WHERE id_cadastro_cliente = '$id_cadastro_cliente'";
                            $result = mysqli_query($conecta, $sql);
                            echo "<form action='ataluno.php' method='get'>";
                            While($consulta = mysqli_fetch_array($result)) {
                                echo "

                                <div>
                                <input type='hidden' name='id_cadastro_cliente' value='$consulta[id_cadastro_cliente]'></div>

                                        <div class='form-group'>
                                            <label>nome</label>
                                            <input type='' class='form-control' name='nome' value='$consulta[nome]'></div>
                                            
                                             <div class='form-group'>
                                            <label>email</label>
                                            <input type='' class='form-control' name='email' value='$consulta[email]'></div>

                                             <div class='form-group'>
                                            <label>senha</label>
                                            <input type='' class='form-control' name='senha' value='$consulta[senha]'></div>

                                             <div class='form-group'>
                                            <label>rg</label>
                                            <input type='' class='form-control' name='rg' value='$consulta[rg]'></div>

                                            <div class='form-group'>
                                            <label>cpf</label>
                                            <input type='' class='form-control' name='cpf' value='$consulta[cpf]'></div>

                                            <div class='form-group'>
                                            <label>genero</label>
                                            <input type='' class='form-control' name='genero' value='$consulta[genero]'></div>

                                            <div class='form-group'>
                                            <label>telefone</label>
                                            <input type='' class='form-control' name='telefone_cell' value='$consulta[telefone_cell]'></div>

                                             <div class='form-group'>
                                            <label>Nascimento</label>
                                            <input type='' class='form-control' name='nascimento' value='$consulta[nascimento]'></div>

                                            <div class='form-group'>
                                            <label>Curso</label>
                                            <input type='' class='form-control' name='curso' value='$consulta[curso]'></div>

                                            <div class='form-group'>
                                            <label>Data de conclusão</label>
                                            <input type='' class='form-control' name='dt_clonc' value='$consulta[dt_clonc]'></div>

                                             <div class='form-group'>
                                            <label>cep</label>
                                            <input type='' class='form-control' name='cep' value='$consulta[cep]'></div>
                                            
                                            <div class='form-group'>
                                            <label>estado</label>
                                            <input type='' class='form-control' name='estado' value='$consulta[estado]'></div>

                                            <div class='form-group'>
                                            <label>cidade</label>
                                            <input type='' class='form-control' name='cidade' value='$consulta[cidade]'></div>

                                            <div class='form-group'>
                                            <label>bairro</label>
                                            <input type='' class='form-control' name='bairro' value='$consulta[bairro]'></div>

                                            <div class='form-group'>
                                            <label>rua</label>
                                            <input type='' class='form-control' name='rua' value='$consulta[rua]'></div>


                                            <div class='form-group'>
                                            <label>numero</label>
                                            <input type='' class='form-control' name='numero' value='$consulta[numero]'></div>

                                            

                                           

                                            
                            
                                                <script>
                                         function funcao1()
                                        { 
                                         alert('Alterado com sucesso!!!');
                                          } 
                                            </script>  
                                        
                                        <button type='submit' onclick='funcao1()' class='btn btn-default'>Alterar</button>
                                            ";
                            }

                             echo "</form>";
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
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.15/datatables.min.js"></script>

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
