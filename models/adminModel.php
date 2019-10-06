<?php
class AdminModel extends Model{
    function __construct(){
        parent::__construct();
    }

    public function deleteArtModel(){
        $stmt = $this->db->prepare("DELETE FROM `articles` WHERE id = :id");
        if($stmt->execute(['id' => $id])){
            return true;
        }
        return false;
    }

    public function updateCurModel($data){
        $stmt = $this->db->prepare("UPDATE articles SET name = :name, text = :text WHERE id = :id");
        if($stmt->execute([
            'id' => $data['id'],
            'name' => $data['name'],
            'text' => $data['text']
        ])){
            return true;
        }else{
            return false;
        }
    }

    public function getArtById($id = false){
        if($id == false){
            return false;
        }else{
            $stmt = $this->db->prepare("SELECT * FROM `articles` WHERE id = :id");
            $stmt->execute(['id' => $id]);
            return $stmt->fetchAll();
        }
    }

    public function getArtsByPage($limit, $offset){
        $stmt = $this->db->prepare("SELECT * FROM `articles` LIMIT $offset, $limit");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getCountModel(){
        $stmt = $this->db->prepare("SELECT COUNT(id) FROM `articles`");
        $stmt->execute();
        return $stmt->fetchColumn();
    }

    public function createArtModel($data){
        if(!empty($data)){
            $stmt = $this->db->prepare("INSERT INTO articles(name,
             text) VALUES (:name, :text)");
            $stmt->execute(array(
                'name' => $data['name'], 
                'text' => $data['text']
            ));
            return true;
        }
        return false;
    }
}