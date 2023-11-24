<?php

$nombres = ["Juan", "María", "Pedro", "Ana", "Carlos", "Luisa", "Sofía", "Miguel", "Isabel",
"Jesus", "Sebastian", "Citlaly", "Erik", "Lisset"];

function clasificarNombres($nombres) {
    $resultado = [
        'cortos' => [],
        'medianos' => [],
        'largos' => []
    ];

    foreach ($nombres as $nombre) {
        $longitud = strlen($nombre);

        if ($longitud <= 4) {
            $resultado['cortos'][] = $nombre;
        } elseif ($longitud <= 6) {
            $resultado['medianos'][] = $nombre;
        } else {
            $resultado['largos'][] = $nombre;
        }
    }

    return $resultado;
}

$clasificacion = clasificarNombres($nombres);

echo "Lista de nombres a clasificar: " . implode(", ", $nombres) . "\n";
echo "<br>";
echo "<br>";
echo "Nombres Cortos son: " . implode(", ", $clasificacion['cortos']) . "\n";
echo "<br>";
echo "<br>";
echo "Nombres Medianos son: " . implode(", ", $clasificacion['medianos']) . "\n";
echo "<br>";
echo "<br>";
echo "Nombres Largos son: " . implode(", ", $clasificacion['largos']) . "\n";
?>
