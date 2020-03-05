<?php

class Post{
    private $db;
    public function __construct(){
        $this->db = new Database();
    }


     public function getItems($author_id){
          $this->db->query('SELECT * FROM posts');
         $this->db->query('SELECT * FROM posts WHERE author_id = :author_id');
         $this->db->bind(':author_id',$author_id);
         $results = $this->db->resultSet();
         return $results;
     }
}





?>