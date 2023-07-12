<?php 

const SPACE_PATH = __DIR__ .'/../';

require  SPACE_PATH.'Cores/functions.php';


spl_autoload_register(function ($class) {

    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    require space_path("{$class}.php");

});


require space_path("Cores/router.php");

// dd($_SERVER);
//$heading = "Home";




?>

