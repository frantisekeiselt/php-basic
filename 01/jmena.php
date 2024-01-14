<?php
/**
 * Hra: Házení kostkou. Při každym zavolání se hodí kostkou (čísla 1-6) a výsledek se vypíše. Pokud padne 6 tak se
 * napíše "Výhra!".
 *
 * Extra: Každej hod kostkou zároveň zapiš do souboru (např. historie.txt). Na každej řádek jeden hod.
 *
 * 5
 * 1
 * 6
 * 3
 * 4
 * ...
 *
 *
 */

const NAZEV_APLIKACE = "Moje appka v1.0";
const POCET_PRODUKTU_NA_STRANKU = 20;

function forEachNamePrintOutput($names)
{
    $var = POCET_PRODUKTU_NA_STRANKU;

    if($var === null)
    {
        echo ('Var se vskutku rovná 4');
    }

//    foreach ($names as $id => $person) {
//        $formattedName = ucfirst($person ["name"]);
//        $formattedsurname = ucfirst($person ["surname"]);
//        echo "Zákazník [$formattedName $formattedsurname] má ID: $id. \n";
//    }
//
    for($i = 0; $i <= 10; ++$i)
    {
        echo ($i . PHP_EOL);
    }
//
//    $var = 0;
//    while($var < 5)
//    {
//        echo ('VAR je nyní: ' . $var . PHP_EOL);
//        $var++;
//    }
}

$array = [
    "10001" => [
        "name" => "Tomáš",
        "surname" => "Pokorný",
    ],
    "10002" => [
        "name" => "Jirka",
        "surname" => "Novotný",
    ],
    "10003" => [
        "name" => "Michal",
        "surname" => "Veselý",
    ],
    "10022" => [
        "name" => "Michal",
        "surname" => "Trnava",
    ]
];

jmena($array);