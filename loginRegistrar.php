<?php

    include("conexión.php");

    $curp = $_POST['rCurp'];
    $clave = $_POST['rClave'];
    $conClave = $_POST['rCClave'];
    $conClave = $_POST['rCorreo'];

    if ($clave == $conClave){
        $sqlRegistrar = "INSERT INTO login(curp, clave, correo) VALUES ('$curp', '$clave', '$correo')";
    
        if(mysqli_query($conn, $sqlgrabar)){
            echo "<script> alert('CURP: $curp registrado con exito'); window.location='index.html' </script>";
        }else{
            echo "<script> alert('Error: No se pudo registrar'); window.location='login.html' </script>";
        }

    }else{
        echo "<script> alert('Error: No se pudo registrar'); </script>";
    }

    
?>