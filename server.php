<?php
//Prendo il file json
$todos = file_get_contents('todos.json');

//Controllo esista
//var_dump($todos);

//Collego con il metodo header il file json all #app
header('Content-Type: application/json');

//Stampo a schermo il json e verifico che sia scritto bene
echo $todos;



?>