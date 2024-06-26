<!-- // todo: Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
<?php 
$randomNumbersArray = [];

while (count($randomNumbersArray) < 15) {
    $randomInt = rand(1, 50);
    if (!in_array($randomInt, $randomNumbersArray)) {
        $randomNumbersArray[] = $randomInt;
    }
}

?>

<h1>Random numbers</h1>
<h2>  
    <?php foreach ($randomNumbersArray as $index => $number) { ?>
        <?php if ($index === 14) { ?>
            <span> <?php echo $number; ?> </span>
        <?php } else { ?>
            <span> <?php echo $number; ?> </span> -
        <?php } ?>
    <?php } ?>
</h2>