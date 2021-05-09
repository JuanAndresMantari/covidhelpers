<?php

include "conexion.php";

  if(isset($_GET['id']))
  {
  $id = mysqli_real_escape_string($conexion,$_GET['id']);

      if (isset($_POST['checkbox']))
      {
         $formatos = implode(',', $_POST['checkbox'] );

         $cadena="INSERT INTO tblprueba SET iduser='$id',p1='$formatos'";
         $sql = mysqli_query($conexion,$cadena);

         switch ($formatos) {
           case '10':
              header("Location: resultado1.php?id=$id");
             break;

            case '8':
              header("Location: cuestionario1.php?id=$id");
             break;

            case '9':
              header("Location: cuestionario1.php?id=$id");
             break;

            case '7':
              header("Location: cuestionario1.php?id=$id");
             break;

            case '7,8,9':
              header("Location: cuestionario1.php?id=$id");
             break;

            case '8,9':
              header("Location: cuestionario1.php?id=$id");
             break;

            case '7,9':
              header("Location: cuestionario1.php?id=$id");
             break;

            case '7,8':
              header("Location: cuestionario1.php?id=$id");
             break;

           default:
             header("Location: cuestionario1.php?id=$id");
             break;
         }
      
  }
}


 ?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title>Covid Helpers </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

  <link rel="stylesheet" type="text/css" href="css/stylestepbar.css">
    <link rel="stylesheet" href="css/estilos-check.css">

</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
<?php
include 'header.php';
?>
  </div>

  <!-- contact section -->


  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          TEST COVID-19
        </h2>
        <p>
          Realizar un test online es un gran paso para la prevención del COVID-19
        </p>
      </div>
    <form action="" method="post">  
      <div class="row">
        <div class="col-md-6">

              <div action="" class="formulario">
    
              <div class="checkbox">
            <h3>¿Durante los últimos 14 días presentas o has presentado algunos de los siguientes síntomas?</h3>
            <input type="checkbox" name="checkbox[]"  value="1" id="checkbox1" >
            <label for="checkbox1">FIEBRE</label>
    
            <input type="checkbox" name="checkbox[]"  value="2" id="checkbox2">
            <label for="checkbox2">DOLOR DE GARGANTA</label>
            
            <input type="checkbox" name="checkbox[]"  value="3"  id="checkbox3">
            <label for="checkbox3">TOS SECA</label>

            <input type="checkbox" name="checkbox[]"  value="4"  id="checkbox4">
            <label for="checkbox4">DIARREA</label>

            <input type="checkbox" name="checkbox[]"  value="5"  id="checkbox5">
            <label for="checkbox5">PÉRDIDA DEL OLFATO Y/O GUSTO</label>

            <input type="checkbox" name="checkbox[]"  value="6"  id="checkbox6">
            <label for="checkbox6">DOLOR DE CABEZA</label>

            <input type="checkbox" name="checkbox[]"  value="7" id="checkbox7">
            <label for="checkbox7">DOLOR O PRESION EN EL PECHO</label>
    
            <input type="checkbox" name="checkbox[]"  value="8" id="checkbox8">
            <label for="checkbox8">DIFICULTAD PARA RESPIRAR</label>
            
            <input type="checkbox" name="checkbox[]"  value="9" id="checkbox9">
            <label for="checkbox9">DIFICULTAD PARA HABLAR O MEVERSE</label>

            <input type="checkbox" name="checkbox[]"  value="10" id="checkbox10">
            <label for="checkbox10">NINGUNA</label>
          
              </div>
                </div>
        </div>
        <div class="col-md-6">
          <br><br><br>
          <div class="form_container contact-form">
                <div id="stepProgressBar">
      <div class="step">
        <p class="step-text">2</p>
        <div class="bullet">2</div>
      </div>
      <div class="step">
        <p class="step-text">Step 3</p>
        <div class="bullet">3</div>
      </div>
      <div class="step">
        <p class="step-text">Step 4</p>
        <div class="bullet ">4</div>
      </div>
    </div><br>
              <div class="btn_box">
                <button id="nextBtn">
                  <input type="submit" value="Siguiente" name="">
                </button>
              </div>
            
          </div>
        </div>
      </div>
      <!--row--->
      </form>
    </div>
  </section>
  <!-- end contact section -->

<?php
include 'footer.php';
?>
    
  <script type="" src="js/bar.js"></script>
  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>