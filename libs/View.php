<?php
class View{
    public function render($name, $arg = false){
        require "header.php";
        $path = 'views/' .$name. ".php";
        if(file_exists($path)){
            require $path;
        }
        require "footer.php";
    }
}