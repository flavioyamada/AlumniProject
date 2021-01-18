<?php

    session_start();

            $email = $_SESSION['email'];

            if (isset($_SESSION['email'])){
                
                }
                else {
                header("Location:index.php");
                exit();
                }

?> 
<!DOCTYPE html>
<html lang="en">

<head>
<style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ALUMNI</title>

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">ALUMNI</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="serviços.php">Serviços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Notícias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Empregos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contato</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger">Bem vindo(a) <?php echo $email; ?></a>
          </li>
                    <li class="nav-item">
                      <a href="php/logout.php">Sair</a>
                    </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Seja bem vindo ao ALUMNI</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">A plataforma para reunir alunos egressos do IFSP</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Conheça o Alumni</a>
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
 <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">O que é o ALUMNI?</h2>
          <hr class="divider light my-4">
          <p class="">Proposito:<br>


o IFSP - Campus Jacareí necessita de um sistema para acompanhar o aluno
egresso de cursos do ensino superior para que também o auxilie no mercado de
trabalho. É necessário, como principal, que o sistema armazene as informações
dos alunos individualmente por meio de um banco de dados, sendo necessário
um cadastro do aluno contendo todos as informações de contato. O sistema deve
apresentar aos alunos, uma forma de interação maior entre egressos e
estudantes. Para que possa auxiliar na veiculação de vagas de emprego em
determinada área. O sistema foi desenvolvido no ambiente WEB, de forma clara
e limpa. A veiculação do site deve ser alta, e também o aluno receberá
mensagens e notificações sobre o sistema via e-mail e redes sociais.<br>


Objetivo:<br>


O objetivo do sistema é acompanhar o aluno egresso para adquirir algumas
informações sobre como o curso influenciou em sua vida profissional e pessoal,
qual foi a experiência do aluno em seus anos no Instituto, descobrir através de
sugestões o que precisa ser melhorado em nosso campus, tanto em estrutura,
quanto no ensino. Proporcionaremos vantagens ao aluno egresso que se
cadastrar em nosso site como, vagas de emprego, serviços acadêmicos
(solicitação de documentação), contato entre ex-alunos e também de seus
professores.

Motivação:<br>


Os alunos egressos fizeram parte da história da faculdade, pensando nisso, é de
grande necessidade a criação de uma aplicação para que a vida acadêmica no
Instituto Federal não se inicie apenas em um curto período de tempo de sua vida.
Com o alumni será possível que o aluno egresso mantenha contato com suas
raízes que o fizeram a ser um bom profissional. Ele terá todo o suporte para que
possa discutir com estudantes atuais, disponibilizar vagas de emprego e ajudar
no que for possível, mantendo sempre o contato com a faculdade que o graduou.</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="quest.html">Responda nosso Questionário</a>

        </div>
      </div>
    </div>
  </section>


  <!-- Services Section -->
  <section class="page-section" id="services">
    <div class="container">
      <h2 class="text-center mt-0">Notícias</h2>
       <hr class="divider my-4">
        <div class="row">
                    <div class="col-lg-12" style="overflow-x:auto">
                        <table id="datat" class="table table-hover table-bordered"><!--17-->
                            <thead>
                                <tr>
                                    <th>Tema</th>
                                    <th>Data de Publicação</th>
                                    <th>Descrição</th>
                                    
                                </tr>
                            </thead>
                            <tbody>

                             <?php

                            include 'conecta.php';
                            mysqli_select_db($conecta, 'alumni') or print(mysqli_error());
                            $sql = 'SELECT * FROM `noticias`';
                            $result = mysqli_query($conecta, $sql);

                            While($consulta = mysqli_fetch_array($result)) {
                                echo "<tr>
                                <td>$consulta[tema]</td>
                                <td>$consulta[data]</td>
                                <td>$consulta[descricao]</td>
                        
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
     
    </div>
  </section>

  <!-- Portfolio Section -->
  <section id="portfolio">
<div class="container">
      <h2 class="text-center mt-0">Ofertas de Emprego</h2>
      <hr class="divider my-4">
      <div class="row">
        <div class="row">
                    <div class="col-lg-12" style="overflow-x:auto">
                        <table id="datat" class="table table-hover table-bordered"><!--17-->
                            <thead>
                                <tr>
                                    <th>Titulo</th>
                                    <th>Descrição</th>
                                    <th>Salário</th>
                                     <th>Candidatar-se</th>

                                    
                                </tr>
                            </thead>
                            <tbody>

                             <?php

                            include 'conecta.php';
                            mysqli_select_db($conecta, 'alumni') or print(mysqli_error());
                            $sql = 'SELECT * FROM `vaga_emprego`';
                            $result = mysqli_query($conecta, $sql);

                            While($consulta = mysqli_fetch_array($result)) {
                                echo "<tr>
                                <td>$consulta[titulo]</td>
                                <td>$consulta[descricao]</td>
                                <td>$consulta[salario]</td>
                                
                        
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
      </div>
    </div>
  </section>

  <!-- Call to Action Section -->

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Contato e Localização</h2>
          <hr class="divider my-4">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div>(12) 2128-5200</div>

        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <a class="d-block" href=""></a>
        </div>
      </div>
    </div>
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: -23.317110, lng: -45.983618};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1Y3LEcza8XtiyN7BEEb5-JXr7ushtv3E&callback=initMap">
    </script>
  </section>



  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2019 -Projeto Alumni</div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/creative.min.js"></script>

</body>

</html>
