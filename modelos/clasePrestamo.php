<?php

    class clasePrestamo{
        
        public $Id;
        public $LineaPrestamo;
        public $Titular;
        public $FechaAlta;
        public $CantidadCuotas;
        public $MontoCapital;

        public function MostrarDatos(){
            echo "<hr>";
            echo "<--- Prestamo ---> <br>";
            echo "ID: " . $this->Id . "<br>";
            echo "Fecha de alta: " . $this->FechaAlta . "<br>";
            echo "Cantidad de cuotas: " . $this->CantidadCuotas . "<br>";
            echo "Monto Capital: " . $this->MontoCapital . "<br>";
            
            echo "<hr>";
            echo "<--- Linea Prestamo --- > <br>";
            echo "ID: " . $this->LineaPrestamo->Id . "<br>";
            echo "Descripción: " . $this->LineaPrestamo->Description . "<br>";
            echo "Tasa Efectiva Mensual: " . $this->LineaPrestamo->TasaEfectivaMensual . "<br>";

            echo "<hr>";
            echo "<--- Datos Persona --- > <br>";
            echo "ID: " . $this->Titular->Id . "<br>";
            echo "Nombre: " . $this->Titular->Nombre . "<br>";
            echo "Apellido: " . $this->Titular->Apellido . "<br>";
            echo "Documento: " . $this->Titular->Documento . "<br>";

            echo "<hr>";
            echo "<--- Dirección --- > <br>";
            echo "ID: " . $this->Titular->Direccion->Id . "<br>";
            echo "Calle: " . $this->Titular->Direccion->Calle . "<br>";
            echo "Numero: " . $this->Titular->Direccion->Numero . "<br>";
            echo "Localidad: " . $this->Titular->Direccion->Localidad . "<br>";
            
            echo "<hr>";
            echo "<--- Provincia ---> <br>";
            echo "ID: " . $this->Titular->Direccion->Provincia->Id . "<br>";
            echo "ID: " . $this->Titular->Direccion->Provincia->Description . "<br>";
            echo "<hr>";
        }
    }

?>