<?php

function dd($value)
{
echo "<pre>";
var_dump($value);
echo "</pre>";
die;
}

function urlIs($value) {

    return $_SERVER['REQUEST_URI'] === $value;
}


function authorize($condition, $status = Response::FORBIDDEN) {
    if (! $condition) {
        abort($status);
    }
    
}

function space_path($spath) 
{
    return BASE_PATH . $spath;
}

function viewing($spath, $attributes = []) {
    
    extract($attributes);
    require space_path('views/' . $spath);
}



?>