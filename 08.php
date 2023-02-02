<?php include 'includes/header.php';

// manejar diferentes clases que estan en diferentes archivos
// se recomienda tener una clase por archivo

//le decimos ue vamos a usar esas clases son esos namespace para instanciarlas solo con el nombre de la clase
// o las instanciamos como estan el la parte de abajo es lo mismo
// use app\Clientes;
// use app\Detalles;


// vamos a incluir las clases 
// require 'clases/clientes.php';
// require 'clases/detalles.php';

// php tiene algo llamado autoload para crear una funcion y asi evitar tener tantos require y lo hace mas dinamico
// la carpeta vendor viene a suplir todo mi autoload
function mi_autoload($clase){
    // importante le tenemos que decir donde estan las clases
    // require __DIR__ . '/clases/' . $clase . '.php';
    // cuando lo dejamos asi como arriba pero ya pusimos un namespace tenemos que quitar el nombre (app\) xk sino da error
    // explode() toma dos argumentos uno es lo que vamos a buscar en este caso \
    // y segundo donde la vamos a buscar
    // \\ se coloca dos veces xk sino tirar error xk es como escapar las comillas
    $partes = explode('\\' , $clase);
    // var_dump($partes); esto nos regresa un array con dos posisiones lo que ocupamos y lo que no
    // var_dump($partes[1]); // posision [0] es la del app q vamos a borrar y la [1] la que ocupamos
    require __DIR__ . '/clases/' . $partes[1] . '.php';
}

// asi llamo al autoload que quiero cargar con spl_autoload_register
spl_autoload_register('mi_autoload');


// ya llamados los archivos de las clases desde aca podemos intanciarlos
// para intarciar una clase que ya tiene namespace solo ponemos el nombre que le colocamos y una \ (app\)
$detalles = new app\Detalles();
echo "<br>";
$clientes = new app\Clientes();
echo "<br>";




include 'includes/footer.php';