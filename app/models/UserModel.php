<?php 

class UserModel {
    private $table = 'users',
            $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getUsers()
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE level='user'");
        return $this->db->all();
    }

    public function storeUser($data)
    {
        $hash = password_hash($data['password'], PASSWORD_DEFAULT);

        $this->db->query("INSERT INTO {$this->table} (name, email, password) VALUES (:name, :email, :password)");

        $this->db->bind('name', $data['name']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $hash);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function findUserByEmail($email)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE email = :email");
        $this->db->bind('email', $email);
        $row = $this->db->single();

        if($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

    public function login($data)
    {
        $userEmail = $data['email'];
        $row = $this->findUserByEmail($userEmail);
        if($row == false) return false;

        $hashedPass = $row['password'];

        if(password_verify($data['password'], $hashedPass)) {
            return $row;
        } else {
            return false;
        }
    }

    public function session($user)
    {
        $_SESSION['id'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['isLogged'] = true;

        header('Location: ' . BASE_URL);
    }

}