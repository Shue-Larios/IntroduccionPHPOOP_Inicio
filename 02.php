<?php 
declare ( strict_types = 1);

include 'includes/header.php';

include 'includes/footer.php';

// Modificadores de Acceso public y protected


//TITULO: Piedra angular 2 Encapsulacion

 // los public se conocen como modificadores de acceso son 3
 // los public se pueden acceder y modificar desde cualquier lugar (clase o objeto)
// protected se puede acceder y modificar unicamente en la clase
// private solo miembros de la misma clase pueden acceder a el

// contructores en PHP 8 ya modificado
class Producto {
 //esta es la clase la de abajo   
public function __construct(public string $nombre,public int $precio, public bool $disponible)
{
}
    public function mostrarProducto() {
        echo "el Producto es: " . $this->nombre . " y su precio es: " . $this->precio;
    }

    // si esta como protected tenemos que crear un metodo
    // para obtener un valor utilizamos get
    // para modificar un valor utilizamos set en la POO
    // como retorna un string por eso le ponemos : string esto para mejorar el codigo
    public function getNombre() : string{
        return $this->nombre;
    }
    // esta es la prueba del set
    public function setnombre($nombre){
        // $this->nombre = "Shue"; tambien funciona asi
         $this->nombre = $nombre;
    }
}


$producto = new Producto("tablet",200,true);
// el objeto
$producto->mostrarProducto();
// asi mostramos el metodo get nombre
echo $producto->getNombre();

// prueba para imprimir el set
echo $producto->setNombre("nuevo nombre");


echo "<pre>";
var_dump($producto);
echo "</pre>";
