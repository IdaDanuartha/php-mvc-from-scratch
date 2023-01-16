<?php 

class CategoryModel {
    private $table = 'categories',
            $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getCategories()
    {
        $this->db->query("SELECT * FROM {$this->table}");
        return $this->db->all();
    }
}