<?php

//var_dump($_SERVER);
switch ($_SERVER["REQUEST_URI"]) {
    case "/";
    echo "HomePage";
    break;
    case"/About";
    echo"About Page";
    break;
    default:
    echo"404";
    break;

};
