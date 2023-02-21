<?php

    $result = 4;

    function sum($numberOne, $numberTwo) {
        $result = $numberOne + $numberTwo;

        return $result;
    }

    // Versione con arrow function (singola istruzione con return implicito):
    // fn($numOne, $numTwo) => $numOne + $numTwo;

    $result = sum(3, $result);

    echo sum(1, 2);

    echo '<br>';

    $sumResult = sum(6, 12);
    echo $sumResult;

    echo '<br>';

    $sumResultTwo = sum($sumResult, 12);
    echo $sumResultTwo;


    $arrayVuoto = [];
    function nicolas() {
        $numeroUno = rand(1, 10);
        $numeroDue = rand(1, 10);
        $numeroTre = rand(1, 10);

        return [
            'uno' => $numeroUno,
            'due' => $numeroDue,
            'tre' => $numeroTre
        ];
    }

    $risultato = nicolas();
    $arrayVuoto[] = $risultato['uno'];
    $arrayVuoto[] = $risultato['due'];
    $arrayVuoto[] = sum($risultato['uno'], $risultato['due']);

    var_dump($arrayVuoto);