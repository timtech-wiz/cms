<?php

class Posts{
    private $db;
    
    public function __construct(){
        $this->db = new Database;
    }
    
    public function getCat(){
        $this->db->query("SELECT * FROM categories");
        $row = $this->db->resultSet();
        return $row;
    }
    
    public function getPost(){
        $this->db->query("SELECT * FROM posts ORDER BY post_date DESC");
        $row = $this->db->resultSet();
        return $row;
    }
    
      public function getPostCat(){
        $this->db->query("SELECT posts.*, categories.cat_title AS cname FROM posts INNER JOIN categories ON posts.category = categories.cat_id ORDER BY posts.post_date DESC");
        $row = $this->db->resultSet();
        return $row;
    }
    
    
    public function addCat($data){
        $this->db->query("INSERT INTO categories (cat_title) VALUES(:cat_title)");
        $this->db->bind(":cat_title", $data['cat_title']);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
    
public function addPost($data){
    
    $this->db->query("INSERT INTO posts (post_title, post_author, category, post_content) VALUES(:post_title, :post_author, :category, :post_content)");
        $this->db->bind(":post_title", $data['post_title']);
        $this->db->bind(":post_author", $data['post_author']);
        $this->db->bind(":category", $data['post_category']);
        $this->db->bind(":post_content", $data['post_content']);
        if($this->db->lastInsertId()){
            return true;
        }else{
            return false;
        }
}
    
    public function deleteCat($id){
        $this->db->query("DELETE FROM categories WHERE cat_id = :id");
        $this->db->bind(":id", $id);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
    
    
    public function deletePost($id){
        $this->db->query("DELETE FROM posts WHERE post_id = :id");
        $this->db->bind(":id", $id);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
    
      public function editPosts($id){
        $this->db->query("SELECT posts.*, categories.cat_title AS cname FROM posts INNER JOIN categories ON posts.category = categories.cat_id WHERE posts.post_id = :id ORDER BY posts.post_date DESC");
          $this->db->bind(":id", $id);
        $row = $this->db->resultSet();
        return $row;
    }
    
public function postEdit($data, $id){
    $this->db->query("UPDATE posts SET post_title = :title, category = :category, post_author = :author, post_content = :content WHERE post_id = :id");
    $this->db->bind(":title", $data['title']);
    $this->db->bind(":category", $data['category']);
    $this->db->bind(":author", $data['author']);
    $this->db->bind(":content", $data['content']);
    $this->db->bind(":id", $id);
    
    if($this->db->execute()){
        return true;
    }else{
        return false;
    }
}
    
public function getByCat($category){
    
    $this->db->query("SELECT * FROM posts WHERE category = :category");
    $this->db->bind(":category", $category);
    $row = $this->db->resultSet();
     return $row;  
    
}
    
    
    public function searchPost($data){
        $data = $data['search'];
        $this->db->query("SELECT * FROM posts WHERE post_title LIKE '%$data%'");
        $this->db->bind(":search", $data);
        $row = $this->db->resultSet();
        return $row;
    }
    
    // Register User
    
public function register($data){
    $this->db->query("INSERT INTO users(username, email, password) VALUES(:username, :email, :password)");
    $this->db->bind(":username", $data['username']);
    $this->db->bind(":email", $data['email']);
    $this->db->bind(":password", md5($data['password']));
    $this->db->execute();
}
    //Login User
    public function login($data){
        $this->db->query("SELECT * FROM users WHERE email = :email && password = :password");
        $this->db->bind(":email", $data['email']);
         $this->db->bind(":password", md5($data['password']));
        $row = $this->db->single();
        if($row){
            $_SESSION['logged_in'] = true;
            $_SESSION["username"] = $row->username;
            return true;
        }else{
            return false;
        }
        
        
        
    }
    
    
    public function getPostId($id){
        $this->db->query("SELECT * FROM posts WHERE post_id = :id");
        $this->db->bind(":id", $id);
        $row = $this->db->single();
        return $row;
    }
    
    
}

