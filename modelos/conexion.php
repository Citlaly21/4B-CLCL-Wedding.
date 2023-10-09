<?php
class Conexion {

static public function conectar(){
    $link = new PDO("mysql:host=localhost:3308;dbname=bd-wedding_CLCL4b", "root", "122333");
    //database conexion
    $link->exec("set names utf8");
    
    return $link;
}
}
