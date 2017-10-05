<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        //Oefening variabelen
        $x = 10;
        $y = 7;

        $optellen = $x + $y;
        $aftrekken = $x - $y;
        $vermenigvuldigen = $x * $y;
        $delen = $x / $y;
        $rest = $x % $y;

        echo 'Optellen: ' . $x . ' + ' . $y . ' = ' . $optellen;
        echo 'Aftrekken: ' . $x . ' - ' . $y . ' = ' . $aftrekken;
        echo 'Vermenigvuldigen: ' . $x . ' * ' . $y . ' = ' . $vermenigvuldigen;
        echo 'Delen: ' . $x . ' / ' . $y . ' = ' . $delen;
        echo 'Rest van de deling: ' . $rest;
    ?>
</body>
</html>