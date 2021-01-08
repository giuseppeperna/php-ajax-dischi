<?php
/*
Generare tramite PHP una pagina HTML che mostra questi dati; 
opzionalmente potete associare uno stile che renda il layout piu leggibile.
*/
?>

<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Dischi Musicali</title>
</head>
<body>
    <?php
    require_once __DIR__ .'/database/db.php';
    ?>
    <div class="cds-container container">
        <?php 
        foreach($db_music['response'] as $k => $elements) {
        echo "<div class='cd'>" .
        '<img src="' .$elements['poster'] . '" . alt="poster">'.
        "<h3>". $elements['title'] . "</h3>" .
        "<span class='author grey-text'>". $elements['author'] . "</span>" .
        "<span class='grey-text'>". $elements['genre'] . "</span>" .
        "<span class='grey-text'>". $elements['year'] . "</span>" .
        "</div>";
        };
        ?>
    </div>
</body>
