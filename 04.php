<?php include 'includes/header.php';

// TITULO: Piedra angular 3 Herencia de Classes

// esta es la clase padre
class Transporte{
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

// clase hijo
// para heredar una clase dentro de la otra usamos extends y le damos el nombre d la clase que va a heredar
// de esta forma la clase bicicleta va a tener tanto los atributos como los metodos que tenemos en la clase de transporte
class Bicicleta extends Transporte{
    // en casa que tenga que escribir un metodo que es muy parecido y solo sean pequeños cambios nombrarlos igual para que los reescriba
    public function getInfo() : string{
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas Y NO GASTA COMBUSTIBLE";
    }


}
// clase hijo

// segunda clase que tambien hereda de transporte
class Automovil extends Transporte{
// si en una clase ocupo atributos nuevos copio el  mismo constructos y agrego al final el atributo
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision)
    {       
    }
    public function getTransmision() : string {
        return  $this->transmision;
    }

}


$bicicleta = new Bicicleta(2,1);
$automovil = new Automovil(4,5, "Manual");

// aca le digo que me imprima getInfo como si fuera propiedad de bicicleta
echo $bicicleta->getInfo();

echo "<hr>"; // esto es una linea horizontal
echo $automovil->getInfo();
echo $automovil->getTransmision();


include 'includes/footer.php';


