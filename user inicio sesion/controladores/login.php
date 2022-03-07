<?php 
    require_once('../modelo/Cliente.php');
    session_start();

    if (isset($_REQUEST["btnInicio"])) {
        echo "saludos";
        $correo_cliente = $_POST['correo_cliente'];
        $password = $_POST['password'];
        
        $modeloCliente = new Cliente();
        

        if ($modeloCliente->login($correo_cliente, $password)) {
            $id_cliente = $modeloCliente->obtenerIdCliente($correo_cliente);
            $_SESSION['id_cliente'] = $id_cliente;
            header('Location: ../../index2.php');
            echo "logeado";
        }else{
            header('Location: ../vista/login2.php');
            echo "no se puede ingresar";
        }

    }
?>