<?php
include("conexion.php");
if(isset($_POST['contact'])){
    if(
        strlen($_POST["name"])>=1 &&
        strlen($_POST["email"])>=1 &&
        strlen($_POST["direction"])>=1 &&
        strlen($_POST["phone"])>=1 &&
        strlen($_POST["message"])>=1
    ){
        $name=trim($_POST['name']);
        $email=trim($_POST['email']);
        $direction=trim($_POST['direction']);
        $phone=trim($_POST['phone']);
        $message=trim($_POST['message']);
        $created_at=date("Y-m-d H:i:s");
        $updated_at=date("Y-m-d H:i:s");

        $consulta="INSERT INTO datoscontact(nombre,email,direccion,telefono,mensaje,created_at,updated_at)
        VALUES('$name','$email','$direction','$phone','$message','$created_at','$updated_at');
        ";
        $resultado=mysqli_query($conex,$consulta);
        if($resultado){
            ?>
            <h3 class="success">Tu registro se ha completado correctamente!!</h3>
            
            <?php
        }else{
            ?>
            <h3 class="error">Ocurrio un error</h3>
            <?php
        }
    }else{
        ?> <h3 class="error">Llena todos los campos</h3> <?php
    }
}
?>