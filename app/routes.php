<?php
$viewsDirectory    = "resources/views/";
$templateDirectory = "resources/views/templates/";

$router->get("/", "homepage.php");
$router->get("/example", "!ExampleController@example");
$router->get("/example/users", "!ExampleController@exampleJSONAPI");
$router->get("/example/adusers", "!ExampleController@addUser");

$router->get("/d/([a-z]*)", "customtest.php");

$router->setPageNotFound("404.php");

// Initializing the directories
$router->setDirectories($viewsDirectory, $templateDirectory);