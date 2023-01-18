<?php 

class PostModel {
    private $table = 'posts',
            $table2 = 'categories',
            $table3 = 'users',
            $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getPosts()
    {
        $query = "SELECT {$this->table}.*, {$this->table2}.name AS category_name , {$this->table3}.name AS author 
                    FROM {$this->table} 
                    INNER JOIN {$this->table2} 
                    ON {$this->table2}.id = {$this->table}.category_id
                    INNER JOIN {$this->table3} 
                    ON {$this->table3}.id = {$this->table}.user_id";

        $this->db->query($query);
        return $this->db->all();
    }

    public function getPost($id)
    {
        $query = "SELECT {$this->table}.*, {$this->table2}.name AS category_name , {$this->table3}.name AS author 
                    FROM {$this->table} 
                    INNER JOIN {$this->table2} 
                    ON {$this->table2}.id = {$this->table}.category_id
                    INNER JOIN {$this->table3} 
                    ON {$this->table3}.id = {$this->table}.user_id 
                WHERE {$this->table}.id=:id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function storePost($data) {
        $query = "INSERT INTO {$this->table}
                    VALUES
                (null, :title, :category_id, :user_id, :content, null, null)";

        $this->db->query($query);
        $this->db->bind('title', $data['title']);
        $this->db->bind('category_id', $data['category_id']);
        $this->db->bind('user_id', 1);
        $this->db->bind('content', $data['content']);

        $this->db->execute();
        
        return $this->db->rowCount();
    }

    public function updatePost($data, $id) {

        $query = "UPDATE {$this->table} SET
                title = :title,
                category_id = :category_id,                
                content = :content,
                updated_at = :updated_at
              WHERE id = $id";

        $this->db->query($query);
        $this->db->bind('title', $data['title']);
        $this->db->bind('category_id', $data['category_id']);
        $this->db->bind('content', $data['content']);
        $this->db->bind('updated_at', date('Y-m-d H:i:s'));

        $this->db->execute();

        return $this->db->rowCount();
    } 

    public function destroyPost($id) {
        $query = "DELETE FROM {$this->table} WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    
}