<?php 
$data = [ "Nombre" => "Miguel Pérez","Dirección." => "Av. Reforma #4565","Telefono" => "1234567890","Correo" => "mike@test.com","Edad" =>28,"Estado Civil" => "Soltero"];

foreach($data as $key => $value){
    echo "<p><strong>$key</strong>: $value</p>";
}


$numbers = [];
for ($i=11; $i<=111; $i++) { 
    if($i%2 == 0){ //si el resto de la división  es cero, es par
        array_push($numbers, $i);
    }
}
foreach($numbers as $number){
    echo "<p>$number</p>";
}