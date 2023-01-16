<?php 

class PostModel {
    private $table = 'posts',
            $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getPosts()
    {
        $this->db->query("SELECT * FROM {$this->table}");
        return $this->db->all();
    }
}