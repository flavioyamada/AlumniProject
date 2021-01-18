<?php
   session_start();
   include 'conecta.php';
   header('content-type: text/html charset= utf-8');


   $cf=$_POST["cf"];
   $vct=$_POST["vct"];
   $ssa=$_POST["ssa"];
  $qcargo=$_POST["qcargo"];
   $vceapa=$_POST["vceapa"];
  $at_prof=$_POST["at_prof"];
   $sitprof=$_POST["sitprof"];
   $vcepap=$_POST["vcepap"];
   $cvcan=$_POST["cvcan"];
   $cmvcaec=$_POST["cmvcaec"];
   $intposgrad=$_POST["intposgrad"];
   $sesimposgrad=$_POST["sesimposgrad"];
   $sugestao=$_POST["sugestao"];
   

   mysqli_select_db($conecta,"alumni") or print(mysqli_error());


    $sql=('INSERT INTO questio (cf,vct,ssa,qcargo,vceapa,at_prof,sitprof,vcepap,cvcan,cmvcaec,intposgrad,sesimposgrad,sugestao) VALUES("'.$cf.'","'.$vct.'","'.$ssa.'","'.$qcargo.'","'.$vceapa.'","'.$at_prof.'","'.$sitprof.'","'.$vcepap.'","'.$cvcan.'","'.$cmvcaec.'","'.$intposgrad.'","'.$sesimposgrad.'","'.$sugestao.'");');


    mysqli_query($conecta, $sql);

    mysqli_close($conecta);
      echo "
      <script> alert('Obrigado por responder!'); </script>
      <meta HTTP-EQUIV= 'Refresh' CONTENT='0;URL=http://127.0.0.1/alumni/index1.php'>";
  //echo $sql; my 

?>