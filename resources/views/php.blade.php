<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Php</title>
</head>
<body>
<h1>Schijnbaar moet ik in plain php een aantal leerdoelen aantonen. Dus vandaar deze pagina.</h1>
<section>
    <h2>Output</h2>
    <?php
    echo 'Dit zou genoeg moeten zijn om output aan te tonen.';
    //En je geloofd het niet maar ik kan ook een comment maken
    /* op 2 verschillende manieren zelfs! */
    ?>
</section>
<section>
    <h2>Operators</h2>
    <?php
    // Set de variabele i.
    $i = 10;
    echo $i . '<br />';
    //+= is eigenlijk gewoon plus. Je voegt het er aan toe. Verder zou je plus gebruiken als je het niet zou willen opslaan
    $i += 5;
    echo $i . '<br />';

    //+ gebruik je bij bijvoobeeld 2 variableen
    $q = 10;
    $r = 10;
    echo $r + $q;


    ?>
</section>
<section>
    <h2>For loop</h2>
    <?php
    //Deze for loop gaat 10 keer rond!
    for ($j = 0; $j <= 10; $j++) {
        if ($j == 5) {
            echo 'Het nummer is' . $j . '<br />';
        } else {
            echo 'Het nummer is NIET 5, maar:' . $j . '<br />';
        }

    }
    ?>
</section>
<section>
    <h2>Nested loop</h2>
    <?php
    //Een geneste for loop is simpelweg een loop in een loop
    for ($b = 1; $b <= 10; $b++) {
        echo $b . '<br />';
        for ($c = 1; $c <= 2; $c++) {
            echo 'Dit staat er 2 keer, elke keer dat hij door de loop van b heen loopt <br />';
        }
    }
    ?>
    <hr/>
    Dit word bijvoorbeeld gebruikt om tabellen te genereren.
    <table>
        <?php
        for ($j = 1; $j <= 10; $j++) {
            echo '<tr>';
            for ($c = 1; $c <= 10; $c++) {
                echo '<td>';
                echo $c + $j;
                echo '</td>';
            }
            echo '<tr />';
        }
        ?>
    </table>
</section>
<section>
    <h2>Switch case</h2>
    <?php
    //Als a gelijk is aan een bepaald getal (dus 1 of 2 etc pakt hij de case die er bij hoort)
    $a = 0;
    switch ($a) {
        case 0:
            echo "Dit gebeurd er als a gelijk is aan 0";
            break;
        case 1:
            echo "Het is eigenlijk een if else";
            break;
        case 2:
            echo "Maar dan slimmer en overzichtelijker";
            break;
    }
    ?>
</section>
<section>
    <h2>Functions</h2>
    <?php
    //Heel makkelijk voorbeeld
    function voorbeeldfunctie()
    {
        echo 'test';
    }
    voorbeeldfunctie();
    echo '<br />';

    //Check https://stackoverflow.com/questions/415969/what-are-php-nested-functions-for
    function voorbeeldNestedfunctie()
    {
        echo 'testerino';
        function genesteld()
        {
            echo 'Boem';
        }

        genesteld();
    }

    voorbeeldNestedfunctie();
    echo '<br />';
    ?>
</section>
<section>
    <h2>Arrays</h2>
    <?php
    // Deze array heeft 3 waardes
    $leerdoelen = array("Arrays", "Sessions", "Laravel");
    echo 'Ik moet de volgende leerdoelen nog: <ul>';
    //Deze foreach haalt alle items uit de array op
    foreach ($leerdoelen as $leerdoel) {
        echo '<li>' . $leerdoel;
    }
    echo '</ul>';
    ?>
</section>
<section>
    <h2>Get & Post</h2>
</section>
<section>
    <h2>Arrays</h2>
</section>
<section>
    <h2>Arrays</h2>
</section>
<section>
    <h2>Arrays</h2>
</section>
</body>
</html>