<?php

    include("conexión.php");

    $curp = $_POST['lCurp'];
    $clave = $_POST['lClave'];

    $query = mysqli_query($conn, "SELECT * FROM login where curp ='$curp' and clave = ' $clave'");
    $nr = mysqli_num_rows($query);

    if($nr==1){
        echo "<script> alert('Bievenido $curp'); window.location='index.html' </script>";
    }else{
        echo "<script> alert('CURP y/o clave incorrectas'); window.location='login.html' </script>";
    }

?>