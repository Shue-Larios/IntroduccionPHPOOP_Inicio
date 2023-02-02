<?php 
declare ( strict_types = 1);

include 'includes/header.php';

include 'includes/footer.php';

// TITULO:  Métodos Estaticos


// contructores en PHP 8 ya modificado
class Producto { 
 // esta es una variable
    public $imagen;
   
    public static $imagenPlacehoulder = "imagen.jpg";

public function __construct(public string $nombre,public int $precio, public bool $disponible, string $imagen)
{
    if ($imagen) {
        // si hay una nueva imagen la vamos a reescribir
        self::$imagenPlacehoulder = $imagen;
    }
}

    public static function obtenerImagenProducto(){
        // para hacer una referencia a un static que es un atributo utilizamos self
        return self::$imagenPlacehoulder;
    }
    // para crear un  metodo estatico  
    public static function obtenerProducto(){
        echo "obteniendo datos del producto....  ";
    }     

    public function mostrarProducto() {
        echo "el Producto es: " . $this->nombre . " y su precio es: " . $this->precio;
    }
    public function getNombre() : string{
        return $this->nombre;
    }
    // esta es la prueba del set
    public function setnombre($nombre){
         $this->nombre = $nombre;
    }
}


// para llamar un metodo estatico como no necesita instanciarse
// nombre de la clase :: (nombre del static)
echo Producto::obtenerProducto();



$producto = new Producto("tablet",200,true, "hola.jpg");

echo Producto::obtenerImagenProducto();
// el objeto
$producto->mostrarProducto();
// asi mostramos el metodo get nombre
echo $producto->getNombre();

// prueba para imprimir el set
echo $producto->setNombre("nuevo nombre");


echo "<pre>";
var_dump($producto);
echo "</pre>";
