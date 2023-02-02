<?php include 'includes/header.php';

// Conectar a la base de datos con Mysqli en la forma POO
// Mysqli se conecta solo a las bases mysql
// $db = new mysqli('localhost', 'root' , '', 'bienes_raices');

// $query = "SELECT titulo FROM propiedades";
// $resultado = $db->query($query);
// var_dump($resultado->fetch_assoc()); esto solo nos trae  un resultado 

// para traerlos todos los resultado
// while ($row = $resultado->fetch_assoc()) : 
//    var_dump($row);
//    echo "<br>";
// endwhile;


// las sentencias preparadas 
// este codigo no lo van a poder hackear ni hacer inyeccion SQL
// son mas seguras van a evitar la inyeccion de sentencias SQL
// otra ventaja cuando preparas la sentencia en caso de tener la misma consulta se almacena en memoria y el servidor no vuelve hacer todo el trabajo
// en esta linea utilizariamos prepare que es la sentencia preparada y lo agregaremos a una variable $stmt
// $resultado = $db->prepare($query);
$db = new mysqli('localhost', 'root' , '', 'bienes_raices'); //conectar la base
$query = "SELECT titulo, imagen FROM propiedades"; // consulta que vamos hacer
$stmt = $db->prepare($query); // le decimos a la base de datos q se prepare para realizar esta consulta
$stmt->execute(); //ejecutamos el steymen y entoncs vamos q tener  resultados

$stmt->bind_result($titulo, $imagen); // me va a crear automaticamente una variable con los resultados de la consulta se recomiendo poner el mismo nombre de la consulta
// cada variable solamente imprime un campo por decirlo asi de la base

//para que el while funcione bien hay que poner el $stmt->fetch() dentro por eso comente este
// $stmt->fetch(); // de esta forma ya va a traer los datos de la variable que nombre en bind_result (asignamos los resultados)

// // var_dump($titulo); //  imprimimos el resultado
// // var_dump($imagen);

// while imprime todo los resultados de la base pero siempre solo el campo de la variable
while ($stmt->fetch()) : 
   var_dump($titulo);
var_dump($imagen);

endwhile;

include 'includes/footer.php';