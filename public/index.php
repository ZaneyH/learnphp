<?php 

spl_autoload_register(function ($classname){
var_dump($classname);
$classname = substr($classname, 4);
require_once __DIR__ . "/../src/$classname.php";
});


use App\animals\Dog;

$router=new App\Router();
var_dump(new App\animals\Dog);






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
