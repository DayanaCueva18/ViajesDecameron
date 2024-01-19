<?php
require_once "models/PromocionesModels.php";
class PromocionesControllers{
    public function __construct(){}
    public function Promocion()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once "views/Company/promociones.php";
        }

    
    }
}

