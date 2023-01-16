<?php 

class HomeModel {
    private $table1 = 'posts',
            $table2 = 'categories',
            $table3 = 'users',
            $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function postCount()
    {
        $query = "SELECT COUNT(*) as total FROM {$this->table1}";

        $this->db->query($query);
        return $this->db->all();
    }

    public function categoryCount()
    {
        $query = "SELECT COUNT(*) as total FROM {$this->table2}";

        $this->db->query($query);
        return $this->db->all();
    }

    public function userCount()
    {
        $query = "SELECT COUNT(*) as total FROM {$this->table3}";

        $this->db->query($query);
        return $this->db->all();
    }
}