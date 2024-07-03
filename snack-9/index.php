<?php 
// todo: Creiamo due classi, una per rappresentare un Utente ed una per l'utente PremiumUser. Aggiungiamo una classe Membership da passare nel costruttore della sottoclasse PremiumUser. Cerchiamo di usare il piu' possibile getter e setter per accedere e modificare i dati.

require_once __DIR__ . "/classes/PremiumUser.php";
// require_once __DIR__ . "/classes/User.php";

$giuseppe = new User("Giuseppe", "nomeGatto");
var_dump($giuseppe);

$gabriella = new PremiumUser("Gabriella", "nomeCane", new Membership(3));
var_dump($gabriella);