<?php

$todos = json_decode(file_get_contents('todos.json'), true);

header('Content-Type: application/json');

echo json_encode($todos);



?>