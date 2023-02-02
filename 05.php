<?php include 'includes/header.php';

// TITULO:  Classes Abstractas(copia  del 4)

// Que son las clases Abstractas: son las que no se pueden instanciar solamente se pueden heredar
// para hacer una clase Abstractas solamente basta con poner abstract y esto evitara que la intancien 
// como la clase padre solo la utilizamos como heredar con otras clases por eso tiene que ser abstract y no se debe quitar
abstract class Transporte{
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
 
class Bicicleta extends Transporte{
   
    public function getInfo() : string{
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas Y NO GASTA COMBUSTIBLE";
    }

}

class Automovil extends Transporte{

    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision)
    {       
    }
    public function getTransmision() : string {
        return  $this->transmision;
    }

}

// tirar un error xk esta clase de transporte ya no puede intanciarce
// pero si podemos usar otra clase que herede la clase abstract de transporte y esta nueva clase si instanciarla como en el caso de Bicicleta o automovil
$transporte = new Transporte(4,5);
echo $transporte->getInfo();


echo "<hr>"; // esto es una linea horizontal

// asi inctanciamos una clase
$bicicleta = new Bicicleta(2,1);
$automovil = new Automovil(4,5, "Manual");

// aca le digo que me imprima getInfo como si fuera propiedad de bicicleta
echo $bicicleta->getInfo();

echo "<hr>"; // esto es una linea horizontal
echo $automovil->getInfo();
echo $automovil->getTransmision();


include 'includes/footer.php';


