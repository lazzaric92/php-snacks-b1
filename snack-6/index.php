<!-- // todo: Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Snack-6</title>
</head>
<body>
    <main>
        <?php foreach ($db as $key => $category) { ?>
            <article class="<?php if ($key == "teachers") {echo 'bg-grey';} elseif ($key == "pm") {echo 'bg-green';} ?>">
                <?php foreach ($category as $person) { ?>
                    <p>
                        <span> <?php echo $person["name"]; ?> </span> <span> <?php echo $person["lastname"]; ?> </span>
                    </p>
                <?php } ?>
            </article>
        <?php } ?>
    </main>
</body>
</html>
