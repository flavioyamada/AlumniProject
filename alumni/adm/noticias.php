<?php

    session_start();
    
            if (isset($_SESSION['usuario'])){
                
                }
               

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cadastro da Venda</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="css/estilo1.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

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
                <a class="navbar-brand" href="index.php">Alumni</a>
            </div>
            <!-- Top Menu Items -->
            <?php
                include('menu_usuario.php');
            ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Alumni</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

            <!-- /.navbar-collapse -->
        </nav>
 
        <div id="page-wrapper">

            <div class="container-fluid">
            <!-- #################################################################### -->
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Noticias 
                        </h1>
                        <form class="form-horizontal" action="PHP/cadastronoticias.php" method="post">
                            <div class="form-group">
                                <label class="control-label col-md-2" for="tema">Tema:</label>
                                <div class="input-group col-md-4">
                                    
                                    <input type="text" name="tema" id="tema" class="form-control" placeholder="Tema" required="required" />
                                </div>
                            </div>
                        
                            <div class="form-group">
                                <label class="control-label col-md-2" for="data">Data:</label>
                                <div class="input-group col-md-2">
                                    
                                    <input type="date" name="data" id="data" class="form-control" required="required"/>
                                </div>
                            </div>

                             <div class="form-group">
                                <label class="control-label col-md-2" for="descricao">Descrição:</label>
                                <div class="input-group col-md-4">
                                    
                                    <input type="text" name="descricao" id="descricao" class="form-control" placeholder="Descrição" required="required" />
                                </div>
                            </div>
    
                            <div>
                                <div class="col-md-offset-2 col-md-2">
                                    <input type="submit" value="Enviar" />
                                </div>
                            </div>
                        </form>
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
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>