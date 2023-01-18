<?php 

class Home extends Controller {
    public function index()
    {
        $data['title'] = "Home page";
        $data['posts'] = $this->model('PostModel')->getPosts();
        
        $this->view('templates/home_header', $data);
        $this->view('home/index', $data);
        $this->view('templates/home_footer', $data);
    }

    public function post($id)
    {
        $data['title'] = "Detail post";
        $data['post'] = $this->model('PostModel')->getPost($id);
        
        $this->view('templates/home_header', $data);
        $this->view('home/post', $data);
        $this->view('templates/home_footer', $data);
    }
}