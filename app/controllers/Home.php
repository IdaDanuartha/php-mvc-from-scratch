<?php 

class Home extends Controller {
    public function index()
    {
        $data['title'] = "Home";
        $data['post_count'] = $this->model('HomeModel')->postCount();
        $data['category_count'] = $this->model('HomeModel')->categoryCount();
        $data['user_count'] = $this->model('HomeModel')->userCount();
        
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer', $data);
    }
}

?>