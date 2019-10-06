<?php
class Admin extends Controller{
    function __construct(){
        parent::__construct();
    }
    public function index(){
        $_SESSION['arg'] = false;
        $this->view->render("admin/index");
    }

    public function deleteArt($params){
        $_SESSION['arg'] = false;
        if($params[0] == NULL){
            $page = 1;
        }else{
            $page = $params[0];
        }
        $data = $this->getPage($page);
        $this->view->render('admin/deleteart', $data);
    }

    public function deleteCur($params){
        if($params[0] == NULL || $params[1] == NULL){
            header("Location: " .URL. "admin/");
        }else{
            $_SESSION['arg'] = $this->model->deleteArtModel($params[0]);
            header("Location: " .URL. "admin/deleteart/".$params[1]);
        }
    }

    public function updateCur($params){
        if($params[0] == NULL){
            $id = 1;
        }else{
            $id = $params[0];
        }

        if($_POST['ok']){
            if(!empty($_POST['name']) && !empty($_POST['text'])){
                $_SESSION['arg'] = $this->model->updateCurModel($_POST);
            }else{
                $_SESSION['arg'] = false;
            }
            header("Location: " .URL. "admin/updatecur/" .$id);
        }
        $this->view->render('admin/updatecur', $this->model->getArtById($id));
    }

    public function updateArt($params){
        if($params[0] == NULL){
            $page = 1;
        }else{
            $page = $params[0];
        }
        $data = $this->getPage($page);
        $this->view->render('admin/updateart', $data);
    }

    public function showArts($params){
        if($params[0] == NULL){
            $page = 1;
        }else{
            $page = $params[0];
        }
        $data = $this->getPage($page);
        $this->view->render('admin/showarts', $data);
    }

    public function getPage($page = 1){
        $limit = 5;
        $offset = ($page - 1) * $limit;
        $data['total_pages'] = ceil($this->model->getCountModel() / $limit);
        $data['cur_page'] = $page;
        $data['notes'] = $this->model->getArtsByPage($limit, $offset);
        return $data;
    }


    public function createArt(){
        if($_POST['ok']){
            if(!empty($_POST['name']) && !empty($_POST['text'])){
                $_SESSION['arg'] = $this->model->createArtModel($_POST);
            }else{
                $_SESSION['arg'] = false;
            }
            header("Location: " .URL. "admin/createart");
        }
        $this->view->render('admin/createart');
    }
}