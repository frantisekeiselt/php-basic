<?php

function kostka()
{
    $cislo = rand(1, 6);
    return $cislo;

}

$vysledek = kostka();

echo "Vybrané číslo je: $vysledek";
if ($vysledek == 6) {
    echo " Výhra!";


    $obsah = file_get_contents("Výsledky.txt");
    file_put_contents("Výsledky.txt", "$vysledek Výhra" . PHP_EOL . $obsah);
} else {
    $obsah = file_get_contents("Výsledky.txt");
    file_put_contents("Výsledky.txt", "$vysledek" . PHP_EOL . $obsah);
}