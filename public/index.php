<?php 

spl_autoload_register(function ($classname){
$classname = substr($classname, 4);
require_once __DIR__ . "/../src/$classname.php";
});

use App\Router;

//var_dump(Router::$routes);
require __DIR__ ."/../routes.php";

$router=new Router($_SERVER["REQUEST_URI"]);
$match = $router ->match();
if($match){
    if(is_callable($match["action"])){
call_user_func($match["action"]);
    }else if (is_array($match["action"])){
        $class = $match["action"][0];
        $controller = new $class();
        $method = $match["action"][1];
        $controller -> $method();
      
    }


}else{
    echo 404;
}

//var_dump($_SERVER);
//switch ($_SERVER["REQUEST_URI"]) {
   // echo "HomePage";
    // case"/About";
    //echo"About Page";
    //break;
    //default:
    //echo"404";
    //break;

//};
