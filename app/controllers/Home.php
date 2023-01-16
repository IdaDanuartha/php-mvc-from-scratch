<?php 

class Home extends Controller {
    public function index()
    {
        $data['title'] = "Home";
        $data['user'] = $this->model('HomeModel')->getUser();
        
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer', $data);
    }
}

?>