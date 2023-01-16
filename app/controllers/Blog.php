<?php 

class Blog extends Controller {
    public function index()
    {
        $data['title'] = "Blog page";
        $data['blogs'] = $this->model('BlogModel')->getBlogs();
        
        $this->view('templates/header', $data);
        $this->view('blog/index', $data);
        $this->view('templates/footer', $data);
    }
}

?>