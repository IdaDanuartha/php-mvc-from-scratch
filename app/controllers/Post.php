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
}

?>