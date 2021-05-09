
<?php 
include "conexion.php";

  if(isset($_GET['id']))
  { 
  $id = mysqli_real_escape_string($conexion,$_GET['id']);

if (!empty($_POST)) {
    $alert = "";
    if (empty($_POST['radio'])) 
    {
        $alert = '<div class="alert alert-danger" role="alert">
                                    Todos los campos son obligatorios
                                </div>';
    } else {
        $radio = $_POST['radio'];

  
            $query_insert = mysqli_query($conexion, "UPDATE tblprueba SET p2='$radio' WHERE iduser='$id'");
            if ($query_insert) {
                                header("Location: cuestionario2.php?id=$id");
            } else {
                echo "datos no ingresdos";;
            }
        }
    }
    mysqli_close($conexion);

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

  <title>Covid-19 Helpers </title>

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
        <p> <b> ¿En los ultimos 14 dias estuviste en contacto con alguna persona que sea un caso positivo de COVID-19?</b><br>
        </p>
      </div>
    <form action="" method="POST">  
      <div class="row">
        <div class="col-md-6">


              <div action="" class="formulario">
    
              <div class="checkbox">
            <h3></h3>
            <input type="radio" name="radio" value="si" id="checkbox1">
            <label for="checkbox1">SI</label>
            
            <input type="radio" name="radio" value="no" id="checkbox3">
            <label for="checkbox3">NO</label>

              </div>
                </div>
        </div>
        <div class="col-md-6">
          <br><br><br>
          <div class="form_container contact-form">
                <div id="stepProgressBar">

      <div class="step">
        <p class="step-text">paso 3</p>
        <div class="bullet">3</div>
      </div>
      <div class="step">
        <p class="step-text">paso 4</p>
        <div class="bullet ">4</div>
      </div>
    </div><br>
              <div class="btn_box">
                <button id="nextBtn">
                                 <button id="nextBtn">
                  <input type="submit" value="Siguiente" name="">
                </button>
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