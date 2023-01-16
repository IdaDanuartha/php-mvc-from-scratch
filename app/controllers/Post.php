<?php 

class Post extends Controller {
    public function index()
    {
        $data['title'] = "Post page";
        $data['posts'] = $this->model('PostModel')->getPosts();
        
        $this->view('templates/header', $data);
        $this->view('post/index', $data);
        $this->view('templates/footer', $data);
    }

    public function create()
    {
        $data['title'] = "Add Post";
        $data['categories'] = $this->model('CategoryModel')->getCategories();
        
        $this->view('templates/header', $data);
        $this->view('post/create', $data);
        $this->view('templates/footer', $data);
    }

    public function store()
    {
        
    }
}

?>