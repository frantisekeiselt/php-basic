<<<<<<< HEAD
<?php

/* 
 Zde je tvoje funkce. Aplikace se postarala, že ti předává string $uri. V něm je už jen ta 
 část adresy bez serveru (tzn bez: www.mujewb.cz) ale jen to za lomítkem.
 
 Musíš rozlišit 3 typy požadavku:
 - /logout  = odhlášení
 - /list/{zdroj}  = někdo chce vylistovat seznam nějakého zdroje (resource), vždy musí být
   				    uvedeno o jaký zdroj se jedná
 - /view/product/{id}  = tzn. pokud chce někdo produkt musí dodat i za dalším lomítkem jeho ID
 					     a umíme view jen produkty, nic jiného

 Pro /logout se vrátí:
 [
	"action" => "logout",
	"resource" => null,
	"parameters" => null,
 ]

 Pro /list/{zdroj} se vrátí:
 [
	"action" => "list",
	"resource" => "{zdroj}",
	"parameters" => null
 ]

 Pro /view/product/{id} se vrátí:
 [
	"action" => "view",
	"resource" => "product",
	"parameters" => ["id" => {číslo produktu}]
 ]

 Pokud přijde neznámý uri tak se vrátí:
 [
 	"action" => null,
 	"resource" => null,
 	"parameters" => null
 ]

 Ovšem je potřeba zohlednit následující:
 - Můžeš vyrobit pouze jednu proměnnou typu pole, nesmí jich být více.
 - Musíš zajistit, že v případě čísla produktu se jedná vždy o typ int co budeš vracet
   i když přijde string.
 - Plusový body, když vymyslíš způsob aby tahle funkce měla max do 10 řádků ale na každym
   řádku dělala vždy jen jednu věc.

*/
function router(string $uri): array
{

    $router = router($uri);
    $router["path"] = ltrim($router["path"], "/");
    $router["path"] = trim($router["path"]);

    $trace = explode("/", $router["path"]);

    return $trace;

    if ($uri === "/logout") {

        return
            ["action" => "logout"];
        ["resource" => null];
        ["parameters" => null];

    }

    if ($uri === "/list/{zdroj}") {

        return

        ["action" => "list"];
    ["resource" => "zdroj"];
    ["parameters" => null];

}


    if ($uri === "/view/product/{id}") {


        return

            ["action" => "view"];
        ["resource" => "product"];
        ["parameters" => "id" => null];




        }


    if ($uri !== $uris) {

        return
            ["action" => null];
        ["resource" => null];
        ["parameters" => null];


    }


    $router->addroute("GET", "/", $uri("/logout"));


// Zde už je kód co zůstane jak je:
    $uris = [
        "/logout",
        "/list/users",
        "/list/users/active",
        "/list",
        "/view/product/15001",
        "/view/user/55",
        "/view/product",
        "/send/email",
        "/",
        "///",
        "//users",
        "/product/505"
    ];


    foreach ($uris as $uri) {
        var_dump("URI " . $uri . ":");
        var_dump(router($uri));

    };