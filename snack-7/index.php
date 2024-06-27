<!-- // todo: Creare un array contenente qualche alunno di un'ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Questo array dovra' essere inserito in un file separato, da importare. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php 
include_once __DIR__ . "/class.php";

?>

<h1>Class #</h1>
<ul>
    <?php foreach ($class as $student) { ?>
        <h2> <?php echo $student["name"] . " " . $student["lastName"] ?> </h2>
        <h3> Average grade: <?php echo (array_sum($student["marks"]) / count($student["marks"])) ?> </h3>
    <?php } ?>
</ul>