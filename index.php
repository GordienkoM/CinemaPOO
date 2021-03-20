
<?php

// Autoloader
spl_autoload_register(function ($class_name) {
    require 'class/'.$class_name . '.php';
});


$jamesBond = new Role ("James Bond");
$danielCraig = new Actor ("Wroughton Craig", "Daniel", "M", "02-03-1968");
$martinCampbell = new FilmDirector ("Campbell", "Martin", "M", "24-10-1943");
$casinoRoyale = new Film ("Casino Royale", "22-10-2006", 144,  $martinCampbell);
echo $danielCraig->getlastName()."<br/>";
echo $casinoRoyale->getTitle()."<br/>";
?>