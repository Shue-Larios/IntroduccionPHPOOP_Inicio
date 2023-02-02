<?php include 'includes/header.php';


// la carpeta vendor viene a suplir todo mi autoload
// y solo tenemos que decirle que lo requiere
require "vendor/autoload.php";

// ya llamados los archivos de las clases desde aca podemos intanciarlos
// para intarciar una clase que ya tiene namespace solo ponemos el nombre que le colocamos y una \ (app\)
$detalles = new app\Detalles();
echo "<br>";
$clientes = new app\Clientes();
echo "<br>";




include 'includes/footer.php';