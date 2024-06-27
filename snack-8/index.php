<!-- // todo: Creare un array di animali, che abbiano nome, specie, classe in un file animals.php. Creo quattro array diversi in cui inserire soltanto mammiferi, pesci, rettili e tutti gli altri. Nel nostro index.php stampiamo in pagina ognuno di questi array. -->

<?php 
include_once __DIR__ . "/animals.php";

$mammalsArray = [];
$piscesArray = [];
$reptilesArray = [];
$otherAnimalsArray = [];

foreach ($animals as $animal) {
    if($animal["class"] === "Mammifero"){
        $mammalsArray[] = $animal;
    } elseif ($animal["class"] === "Pesce") {
        $piscesArray[] = $animal;
    } elseif ($animal["class"] === "Rettile") {
        $reptilesArray[] = $animal;
    } else {
        $otherAnimalsArray[] = $animal;
    }
}

var_dump($mammalsArray, $piscesArray, $reptilesArray, $otherAnimalsArray);

?>
