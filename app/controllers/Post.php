<?php 

class Post extends Controller {
    public function index()
    {
        if($_SESSION['isLogged']) {
            $data['title'] = "Post page";
            $data['posts'] = $this->model('PostModel')->getPosts();
            
            $this->view('templates/header', $data);
            $this->view('post/index', $data);
            $this->view('templates/footer', $data);
        } else {
            redirect('auth/login');
        }       
    }

    public function create()
    {
        if($_SESSION['isLogged']) {
            $data['title'] = "Add Post";
            $data['categories'] = $this->model('CategoryModel')->getCategories();
            
            $this->view('templates/header', $data);
            $this->view('post/create', $data);
            $this->view('templates/footer', $data);
        } else {
            redirect('auth/login');
        }
    }

    public function store()
    {
        if($this->model('PostModel')->storePost($_POST) > 0) {
            redirect('post/index');
        } else {
            var_dump("Error");
        }
    }

    public function edit($id)
    {
        if($_SESSION['isLogged']) {
            $data['title'] = "Edit Post";
            $data['categories'] = $this->model('CategoryModel')->getCategories();
            $data['post'] = $this->model('PostModel')->getPost($id);
            
            $this->view('templates/header', $data);
            $this->view('post/edit', $data);
            $this->view('templates/footer', $data);
        } else {
            redirect('auth/login');
        }
    }

    public function update($id)
    {
        if($this->model('PostModel')->updatePost($_POST, $id) > 0) {
            redirect('post/index');
        } else {
            var_dump("Error");
        }
    }

    public function destroy($id)
    {
        if($this->model('PostModel')->destroyPost($id) > 0) {
            redirect('post/index');
        } else {
            var_dump("Error");
        }
    }
}

?>