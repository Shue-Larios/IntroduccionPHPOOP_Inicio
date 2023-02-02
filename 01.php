<?php 
declare ( strict_types = 1);

include 'includes/header.php';

include 'includes/footer.php';

// Atributos de la clase y Constructores

// TITULO: Piedra angular 1 Abstraccion 

// creando una clase e instanciandola
// en tres pasos
// paso 1 definir una clase
// se recomiendo que inicie con letra mayuscula no utiliza parentecis solo llaves
class Producto {
    // paso 2 agregar atributos o variables 
    public $nombre;
    public $precio;
    public $disponible;

// para definir un constructor 
// este se manda a llamar automaticamente
// cuando hay funciones dentro de una clase se les conoce como metodos
// inician con soble guion bajo y se les conoce como magic metod o metodos magicos
public function __construct( string $nombre,int $precio,bool $disponible)
{
    // se refiere al objeto o la instancia que hemos creado
    // asi pasamos datos con this
    // el ->nombre es como definimos en public y = $nombre es los valores el constructor
    $this->nombre= $nombre;
    $this->precio= $precio;
    $this->disponible= $disponible;

}
}

// contructores en PHP 8 ya modificado
class Producto2 {
    // paso 2 agregar atributos o variables en esta version de PHP ya no se ocupan

// para definir un constructor 
// este se manda a llamar automaticamente
// cuando hay funciones dentro de una clase se les conoce como metodos
// inician con soble guion bajo y se les conoce como magic metod o metodos magicos
public function __construct(public string $nombre,public int $precio, public bool $disponible)
{
    // ya no se ocupa this en PHP 8
    // se refiere al objeto o la instancia que hemos creado
    // asi pasamos datos con this
    // el ->nombre es como definimos en public y = $nombre es los valores el constructor
}

    public function mostrarProducto() {
        echo "el Producto es: " . $this->nombre . " y su precio es: " . $this->precio;
    }
}



// paso 3 instanciar la clase
// siempre que tenga una clase tengo que utilizar new para crear nueva instancia
// cuando defino esta linea se manda a llamar el constructor
$producto = new Producto("tablet",200,true);

// es la misma forma con php 8
$producto2 = new Producto2("celular",200,true);

// para mandar a llamar un function public
$producto2->mostrarProducto();



// para ingresar a los datos de un objeto es con la sintaxis de flecha
// var_dump($producto->nombre);

// de la misma forma que acceso puedo ingresar un valor
// $producto->nombre = "tablet";
// $producto->precio = 200;
// $producto->disponible = true;

echo "<pre>";
var_dump($producto);
echo "</pre>";

echo "<pre>";
var_dump($producto2);
echo "</pre>";
