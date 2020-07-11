<?php
$viewsDirectory    = "resources/views/";
$templateDirectory = "resources/views/templates/";

$router->get("/", "homepage.php");
$router->get("/example", "!ExampleController@example");
$router->get("/example/users", "!ExampleController@exampleJSONAPI");
$router->post("/example/users", "!ExampleController@addUser");

$router->setPageNotFound("404.php");

// Initializing the directories
$router->setDirectories($viewsDirectory, $templateDirectory);