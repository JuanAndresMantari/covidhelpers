
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
                                header("Location: cuestionario.php");
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