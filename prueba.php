
<?php 
include "conexion.php";
if (!empty($_POST)) {
    $alert = "";
    if (empty($_POST['nombres']) 
        || empty($_POST['apellidos'])
        || empty($_POST['email'])
        || empty($_POST['dni'])
        || empty($_POST['telefono'])
        || empty($_POST['ciudad'])) {
        $alert = '<div class="alert alert-danger" role="alert">
                                    Todos los campos son obligatorios
                                </div>';
    } else {
        $dni = $_POST['dni'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $ciudad = $_POST['ciudad'];

        $result = 0;
        if (is_numeric($dni) and $dni != 0) {
            $query = mysqli_query($conexion, "SELECT * FROM tbluser where dni = '$dni'");
            $result = mysqli_fetch_array($query);
        }
        if ($result > 0) {
            $alert = '<div class="alert alert-danger" role="alert">
                                    El dni ya existe
                                </div>';
        } else {
            $query_insert = mysqli_query($conexion, "INSERT INTO tbluser(dni,nombre,apellido,telefono,email,ciudad) values ('$dni', '$nombres', '$apellidos', '$telefono', '$email', '$ciudad')");
            if ($query_insert) {
                $alert = '<div class="alert alert-primary" role="alert">
                                    Usuario Registrado
                                </div>';
                                header("Location: cuestionario.php?id=$dni");
            } else {
                $alert = '<div class="alert alert-danger" role="alert">
                                    Error al Guardar
                            </div>';
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

  <title>Covid-19 Helpers</title>

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
          Prueba Covid-19
        </h2>
        <p>
          El Grupo de COVID-19 HELPERS hemos creado un test gratuito de autoevaluación para prevenir el COVID-19, hacer una posible detección de contagio, recomendaciones y aislamiento de las personas que así lo requieran.

          Este test es una herramienta de autoevaluación que te ayudará a determinar si debes hacer una prueba de COVID-19.
        </p>
      </div>
    <form action="" method="post" autocomplete="off">  
      <div class="row">
        <div class="col-md-6">
          <div class="form_container contact-form">
           
              <div class="form-row">
                <div class="col-lg-6">
                  <div>
                    <input name="nombres" type="text" placeholder="Nombres" />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div>
                    <input name="apellidos" type="text" placeholder="Apellidos" />
                  </div>
                </div>
              </div>
              <div>
                <input name="email" type="email" placeholder="Email" />
              </div>

    <div id="stepProgressBar">
      <div class="step">
        <p class="step-text">Inicio</p>
        <div class="bullet">*</div>
      </div>
      <div class="step">
        <p class="step-text">1</p>
        <div class="bullet">1</div>
      </div>
      <div class="step">
        <p class="step-text">2</p>
        <div class="bullet">2</div>
      </div>
      <div class="step">
        <p class="step-text">3</p>
        <div class="bullet ">3</div>
      </div>
    </div>

          </div>
        </div>
        <div class="col-md-6">
          <div class="form_container contact-form">
            
              <div class="form-row">
                <div class="col-lg-6">
                  <div>
                    <input name="dni" type="text" placeholder="DNI" />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div>
                    <input name="telefono" type="text" placeholder="# de Telefono" />
                  </div>
                </div>
              </div>
              <div>
                <input name="ciudad" type="text" placeholder="Ciudad" />
              </div>
              <div class="btn_box">
                <button id="nextBtn">
                  <input type="submit" value="Siguiente" style="background-color:transparent; width: 300px, height: 100px;"> 
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
    
  <script type="text/javascript" src="js/bar.js"></script>
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