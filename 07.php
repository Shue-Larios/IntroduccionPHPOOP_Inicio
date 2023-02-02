<?php

 include 'includes/header.php';

//  Piedra angular 4 Polimorfismo


interface TransporteInterfaz {
    public function getInfo() : string;
    public function getRuedas() : int;
}

// para agregar la interfaz a la clase le ponemos implements y agregamos el nombre d la interfaz q vamos a usar
 class Transporte implements TransporteInterfaz{
    public function __construct(protected int $ruedas, protected int $capacidad)
    {        
    }
    public function getInfo() : string{
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas ";
    }
    public function getRuedas() : int {
        return  $this->ruedas;
    }
}

// este es un ejemplo de Polimorfismo que convina la implementacion de la interfaz y la class padre
class Automovil extends Transporte implements TransporteInterfaz{
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $color)
    {        
    }
    public function getInfo() : string{
        return "El transporte Automovil tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas y un color " . $this->color;;
    }
    public function getColor() : string{
        return "el color es " . $this->color;;
    }
}

echo "<pre>";
var_dump($transporte = new Transporte(4,5));
var_dump($auto = new Automovil(4,5,"Rojo"));
echo "</pre>";

echo $transporte->getInfo();
echo "<hr>";
echo $auto->getInfo();
echo "<hr>";

echo $auto->getColor();



include 'includes/footer.php';