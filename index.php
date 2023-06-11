<?php

    require_once "modelos/clasePrestamo.php";
    require_once "modelos/claseDatosPersona.php";
    require_once "modelos/claseLineaPrestamo.php";
    require_once "modelos/claseDireccion.php";
    require_once "modelos/claseProvincia.php";

    #Instanciar clase LineaPrestamo
    $Lp = new claseLineaPrestamo();
    $Lp -> Id = 1;
    $Lp -> Description = "Personal Solo Firma";
    $Lp -> TasaEfectivaMensual = 15 . " %";

    #Instanciar clase Provincia
    $Pro = new claseProvincia();
    $Pro -> Id = 1;
    $Pro -> Description = "Santa Fe";

    #Instanciar clase Direccion
    $Dire = new claseDireccion();
    $Dire -> Id = 1;
    $Dire -> Calle = "Montevideo";
    $Dire -> Numero = 34;
    $Dire -> Localidad = "Rosario";
    $Dire -> Provincia = $Pro;

    #Instanciar clase DatosPersona
    $C_dp = new claseDatosPersona();
    $C_dp -> Id = 1;
    $C_dp -> Nombre = "Daniel";
    $C_dp -> Apellido = "Rodriguez";
    $C_dp -> Documento = 12456789;
    $C_dp -> Direccion = $Dire;


    #Instanciar clase Prestamo
    $clasePres = new clasePrestamo();
    $clasePres -> Id = 1;
    $clasePres -> LineaPrestamo = $Lp;
    $clasePres -> Titular = $C_dp;
    $clasePres -> FechaAlta = date("d/m/y", mktime(0, 0, 0, 8, 21, 2019));
    $clasePres -> CantidadCuotas = 36;
    $clasePres -> MontoCapital = 10000 . " $";
    $clasePres -> MostrarDatos();

?>