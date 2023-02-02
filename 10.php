<?php include 'includes/header.php';

// // Conecttar la base de datos con PDO en POO
// // PDO se conecta hasta en 12 tipos de base de datos
// // el primer dato es el conector de acuerdo a la base a al que me voy a conectar 
// // despues de los dos puntos definimos el host
// // despues dbname es el nombre de la base
// // despues el usuario y por ultimo el password
// $db = new PDO('mysql:host=localhost; dbname=bienes_raices', 'root' , '');
// $query = "SELECT titulo  FROM propiedades"; // consulta que vamos hacer
// // consulta a la base de datos

// // Tipos de fech los que esten en el ultimo
// // fetchColumn(); este se va a traer solo la columna
// // fetchAll(); se va a traer todo
// // fetchObject(); lo muestra como objeto
// $propiedades = $db->query($query)->fetch();

// var_dump($propiedades);



// las sentencias preparadas 
// este codigo no lo van a poder hackear ni hacer inyeccion SQL
$db = new PDO('mysql:host=localhost; dbname=bienes_raices', 'root' , ''); // conectamos la base
$query = "SELECT titulo, imagen FROM propiedades"; // consulta que vamos hace
$stmt = $db->prepare($query); // le decimos a la base de datos q se prepare para realizar esta consulta
$stmt->execute(); //ejecutamos el steymen y entoncs vamos q tener  resultados

// con PDO::FETCH_ASSOC vamos a traer nicamente el arreglo asociativo
$resultado = $stmt->fetchall(PDO::FETCH_ASSOC); // obtenemos los resultados

// iteramos
foreach($resultado as $porpiedad) :
    echo "<pre>";
    echo $porpiedad['titulo'];
    echo $porpiedad['imagen'];
    echo "</pre>";
endforeach;

// echo "<pre>";
// var_dump($resultado);
// echo "</pre>";

include 'includes/footer.php';