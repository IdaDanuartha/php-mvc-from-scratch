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

    public function getCategory($id)
    {
        $query = "SELECT * FROM {$this->table} WHERE id=:id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function storeCategory($data) {
        $query = "INSERT INTO {$this->table}
                    VALUES
                (null, :name, null, null)";

        $this->db->query($query);
        $this->db->bind('name', $data['name']);

        $this->db->execute();
        
        return $this->db->rowCount();
    }

    public function updateCategory($data, $id) {

        $query = "UPDATE {$this->table} SET
                name = :name,
                updated_at = :updated_at
              WHERE id = $id";

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('updated_at', date('Y-m-d H:i:s'));

        $this->db->execute();

        return $this->db->rowCount();
    } 

    public function destroyCategory($id) {
        $query = "DELETE FROM {$this->table} WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }
}