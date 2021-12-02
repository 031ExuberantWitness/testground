<?php

    $curp=$_POST['lCurp'];
    $clave=$_POST['lClave'];
    $correo=$_POST['lCorreo'];

    session_start();

    $_SESSION['lCurp'];

    include("conexión.php");

    $consulta="SELECT * FROM login where curp='$curp' and clave='$clave'";
    $resultado=mysqli_query($conn,$consulta);

    $filas=mysqli_num_rows($resultado);

    if($filas){
        header("location:login.php");
    }else{
        ?>
        <?php
        include("login.php");
        ?>

        <h1 class = "bad" > ERROR </h1>
        <?php	

    }

mysqli_free_result($result);
mysqli_close($conn);