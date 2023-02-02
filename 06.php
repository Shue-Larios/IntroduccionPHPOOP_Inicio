<?php include 'includes/header.php';

// TITULO: Interfaces

// las Interfaces me van a permitir agrupar un grupo de declaraciones de funciones pero no las va a implementar

// para nombrar la interface puedo usar el mismo nombre de la class seguido de interfaz
interface TransporteInterfaz {
    // en esta interfaz le digo que implementacion que tendra esta clase es decir que funciones hay y q retorna
    // getInfo() es el nombre de la funcion de abajo
    public function getInfo() : string;
    // vamos a trabajar con ruedas
    public function getRuedas() : int;
}

// para agregar la interfaz a la clase le ponemos implements y agregamos el nombre d la interfaz q vamos a usar
abstract class Transporte implements TransporteInterfaz{
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
 



include 'includes/footer.php';