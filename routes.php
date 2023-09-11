<?php

use App\Router;
use App\Controllers\PublicController;

Router::addRoute("/", [PublicController::class,"about"]);
Router::addRoute("/", [PublicController::class,"home"]);


