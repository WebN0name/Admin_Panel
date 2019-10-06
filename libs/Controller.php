<?php
class Controller {
    function __construct(){
        $this->view = new View();
    }

    public function loadModel($name){
        $modelName = $name ."Model";
        $path = 'models/' .$modelName. ".php";
        if(file_exists($path)){
            require $path;
            $this->model = new $modelName();
        }
    }
}
