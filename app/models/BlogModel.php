<?php 

class BlogModel {
    private $table = 'blogs',
            $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getBlogs()
    {
        $this->db->query("SELECT * FROM {$this->table}");
        return $this->db->all();
    }
}