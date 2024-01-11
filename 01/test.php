<?php
$variable= "Ahoj vole";
echo $variable;
function addTextAndEcho(string $firstText= "Když nic tak teda tohle"): void
{
    echo $firstText. " A nečum!";
}
addTextAndEcho($variable);
trim($variable);

