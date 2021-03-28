
<?php

// Autoloader
spl_autoload_register(function ($class_name) {
    require 'class/'.$class_name . '.php';
});


// Film "Casino Royale"
$jamesBond = new Role ("James Bond");
$vesperLynd = new Role ("Vesper Lynd");
$chiffre = new Role ("Chiffre");
$m = new Role ("M");
$danielCraig = new Actor ("Wroughton Craig", "Daniel", "M", "02-03-1968");
$evaGreen = new Actor ("Gaëlle Green", "Eva", "F", "06-06-1980");
$madsMikkelsen = new Actor ("Dittman Mikkelsen", "Mads", "M", "22-10-1965");
$judithDench = new Actor ("Dench", "Judith Olivia", "F", "09-12-1934");


$martinCampbell = new FilmDirector ("Campbell", "Martin", "M", "24-10-1943");
$action = new FilmGenre("Action");

$casinoRoyale = new Film ("Casino Royale", "22-10-2006", 144,  $martinCampbell, $action);
$castingCasinoRoyale = new Casting ($casinoRoyale);
$castingCasinoRoyale->addActorRole($jamesBond, $danielCraig);
$castingCasinoRoyale->addActorRole($vesperLynd, $evaGreen);
$castingCasinoRoyale->addActorRole($chiffre, $madsMikkelsen);
$castingCasinoRoyale->addActorRole($m, $judithDench);

$casinoRoyale->set_synopsis = "Pour sa première mission, James Bond affronte le tout-puissant banquier privé du terrorisme international, Le Chiffre. 
Pour achever de le ruiner et démanteler le plus grand réseau criminel qui soit, Bond doit le battre lors d'une partie de poker à haut risque au Casino Royale.
La très belle Vesper, attachée au Trésor, l'accompagne afin de veiller à ce que l'agent 007 prenne soin de l'argent du gouvernement britannique qui lui sert de mise, mais rien ne va se passer comme prévu";

// Film "GoldenEye"

$NatalyaSimonova= new Role ("Natalya Simonova");
$alecTrevelyan = new Role ("Alec Trevelyan");
$pierceBrosnan = new Actor ("Brosnan", "Pierce Brendan", "M", "16-05-1953");
$izabellaScorupco = new Actor ("Scorupco", "Izabella ", "F", "04-06-1970");
$shaunBean = new Actor ("Shaun", "Mark Bean", "M", "17-04-1959");


$goldenEye = new Film ("GoldenEye", "20-12-1995", 130,  $martinCampbell, $action);
$castingGoldenEye = new Casting ($goldenEye);
$castingGoldenEye->addActorRole($jamesBond, $pierceBrosnan);
$castingGoldenEye->addActorRole($NatalyaSimonova, $izabellaScorupco);
$castingGoldenEye->addActorRole($alecTrevelyan, $shaunBean);

$goldenEye->set_synopsis = "James Bond est chargé par le MI6 de retrouver le Goldeneye, un satellite russe volé par des mercenaires, dont la puissance de frappe pourrait rayer de la carte n'importe quelle capitale.
Sur les traces des responsables, l'agent 007 se rend aux quatre coins du monde avant de retrouver sur son chemin une vieille connaissance";


// Film Dream House 
$drama = new FilmGenre("Drama");
$willAtenton = new Role ("Will Atenton");
$jimSheridan = new FilmDirector ("Sheridan", "Jim", "M", "06-02-1949");
$dreamHouse  = new Film ("Dream House ", "05-10-2011", 91,  $jimSheridan, $drama);
$castingDreamHouse  = new Casting ($dreamHouse);
$castingDreamHouse ->addActorRole($willAtenton, $danielCraig);

//Affichage
echo $jamesBond->getInfo();
echo $castingCasinoRoyale->getInfo();
echo $action->getInfo();
echo $drama->getInfo();
echo $danielCraig->showFilmography();
echo $martinCampbell->showFilmography()

?>