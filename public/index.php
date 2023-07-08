<?php 

const BASE_PATH = __DIR__ .'/../';

require  BASE_PATH .'Cores/functions.php';


spl_autoload_register(function ($class) {
    require space_path("Cores/" . $class . '.php');
});


require space_path("Cores/router.php");

// dd($_SERVER);
//$heading = "Home";




?>

