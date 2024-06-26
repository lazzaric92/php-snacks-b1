<!-- // todo: Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z -->

<?php
    $posts = [
        '15/04/2024' => [
            [
                'title' => 'Post 1',
                'author' => 'Bruco Gianluco',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Bruco Gianluco',
                'text' => 'Testo post 2'
            ],
        ],
        '21/04/2024' => [
            [
                'title' => 'Post 1',
                'author' => 'Mariangiongiangela',
                'text' => 'Testo post 1'
            ]
        ],
        '03/05/2024' => [
            [
                'title' => 'Post 1',
                'author' => 'Nonno Laser',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Nonno Laser',
                'text' => 'Testo post 2'
            ],
            [
                'title' => 'Post 3',
                'author' => 'Nonno Laser',
                'text' => 'Testo post 3'
            ]
        ],
        '06/05/2024' => [
            [
                'title' => 'Post 1',
                'author' => 'Dr CuloCane',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Dr CuloCane',
                'text' => 'Testo post 2'
            ],
        ],
    ];
?>

<ul>
    <?php foreach ($posts as $date => $postsList) { ?>
        <li> 
            <?php echo $date ?>
            <ul>
                <?php foreach ($postsList as $post) { ?>
                    <li>
                        <?php echo $post["title"] ?> by <?php echo $post["author"] ?>: <?php echo $post["text"] ?>
                    </li>
                <?php } ?>
            </ul>
            <br>            
        </li>
    <?php } ?>
</ul>