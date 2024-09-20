<?php

require_once "core/App.php";
require_once "core/Controller.php";
require_once "core/Database.php";
require_once "core/Model.php";

require_once "config/config.php";

foreach (glob(__DIR__ . "/controllers/" . "*.php") as $file) {
    include $file;
}

foreach (glob(__DIR__ . "/models/" . "*.php") as $file) {
    include $file;
}