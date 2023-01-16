<?php 

class User extends Controller {
    public function index()
    {
        $data['title'] = "User page";
        $data['users'] = $this->model('UserModel')->getUsers();
        
        $this->view('templates/header', $data);
        $this->view('user/index', $data);
        $this->view('templates/footer', $data);
    }
}

?>