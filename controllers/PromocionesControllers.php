<?php
require_once "models/PromocionesModels.php";
class PromocionesControllers{
    public function __construct(){}
    public function Promocion()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once "views/Company/promociones.php";
        }

        // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //     $Nombre = $_POST['Nombre'];
        //     $Apellido = $_POST['Apellido'];
        //     $Email = $_POST['Email'];
        //     $Respuesta = $_POST['Respuesta']

        //     $PromocionesModels = new PromocionesModels(NULL, $Nombre, $Apellido, $Email, $Respuesta);

        //     // Registrar Usuario
        //     $PromocionesModels->RegistrarUsuario();

        //     // Redireccionar después de enviar los datos del usuario.
        //     header("Location: ?c=Landing");
        // } 
    }
}

