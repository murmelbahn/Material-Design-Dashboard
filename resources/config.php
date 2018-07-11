<?php

/*
    The important thing to realize is that the config file should be included in every
    page of your project, or at least any page you want access to these settings.
    This allows you to confidently use these settings throughout a project because
    if something changes such as your database credentials, or a path to a specific resource,
    you'll only need to update it here.
*/

$config = array(
    "db" => array(
        "db1" => array(
            "dbname" => "dev",
            "username" => "dev",
            "password" => "*Htjizk4YN2bB3!pTu9%&%",
            "host" => "localhost"
        )
    ),
    "urls" => array(
        "baseUrl" => "https://web.gruebelgrotte.com/dev"
    ),
    "paths" => array(
        "resources" => "/var/www/dev/resources",
        "images" => $_SERVER["DOCUMENT_ROOT"] . "/dev/images"

    )
);

defined("TEMPLATES_PATH")
    or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));


/*
    Error reporting.
*/
ini_set("error_reporting", "true");
error_reporting(E_ALL);

?>
