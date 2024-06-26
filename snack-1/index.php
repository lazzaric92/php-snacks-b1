<!-- // ! Snack 1
// todo: Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema: Olimpia Milano - Cantù | 55-60 -->

<?php 
$matches = [
    [
        "teamA" => "Olimpia Milano",
        "teamB" => "Fortitudo Bologna",
        "teamAScore" => rand(0, 100),
        "teamBScore" => rand(0, 100),
    ],
    [
        "teamA" => "Brindisi",
        "teamB" => "Virtus Bologna",
        "teamAScore" => rand(0, 100),
        "teamBScore" => rand(0, 100),
    ],
    [
        "teamA" => "VL Pesaro",
        "teamB" => "Vanoli Cremona",
        "teamAScore" => rand(0, 100),
        "teamBScore" => rand(0, 100),
    ],
    [
        "teamA" => "Reggiana",
        "teamB" => "Olimpia Milano",
        "teamAScore" => rand(0, 100),
        "teamBScore" => rand(0, 100),
    ],
    [
        "teamA" => "Fortitudo Bologna",
        "teamB" => "Brindisi",
        "teamAScore" => rand(0, 100),
        "teamBScore" => rand(0, 100),
    ],
    [
        "teamA" => "Virtus Bologna",
        "teamB" => "VL Pesaro",
        "teamAScore" => rand(0, 100),
        "teamBScore" => rand(0, 100),
    ],
    [
        "teamA" => "Vanoli Cremona",
        "teamB" => "Reggiana",
        "teamAScore" => rand(0, 100),
        "teamBScore" => rand(0, 100),
    ],
];

?>

<ul>
    <?php 
    foreach ($matches as $match) { ?>
        <li>
            <?php echo $match["teamA"] ?> - <?php echo $match["teamB"] ?> | <?php echo $match["teamAScore"] ?>-<?php echo $match["teamBScore"] ?>
        </li>
    <?php } ?>
</ul>