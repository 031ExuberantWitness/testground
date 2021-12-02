<?php

    $curp = $_POST['rCurp'];
    $clave  = $_POST['rCurp'];
    $cclave  = $_POST['rCCurp'];
    $correo  = $_POST['rCorreo'];


    //Conexión

    $conn = new mysqli('192.168.1.107:8080', 'root', '', 'gob_frame');

    if($conn->connect_error){
        die('Connection failed: '.$conn.connect_error);
    }else{
        $stmt = $conn->prepare("INSERT INTO Login(curp, clave, correo) values(?, ?, ?");
        $stmt->bind_param("sss", $curp, $clave, $correo);
        $stmt->execute();
        echo "Registrartion successfully...";

        $stmt->close();
        $conn->close();
    }

?>