<?php 

class Category extends Controller {
    public function index()
    {
        if(isset($_SESSION['isLogged'])) {
            $data['title'] = "Category page";
            $data['categories'] = $this->model('CategoryModel')->getCategories();
            
            $this->view('templates/header', $data);
            $this->view('category/index', $data);
            $this->view('templates/footer', $data);
        } else {
            redirect('auth/login');
        }        
    }

    public function create()
    {
        if(isset($_SESSION['isLogged'])) {
            $data['title'] = "Add Category";
        
            $this->view('templates/header', $data);
            $this->view('category/create', $data);
            $this->view('templates/footer', $data);
        } else {
            redirect('auth/login');
        }        
    }

    public function store()
    {
        if($this->model('CategoryModel')->storeCategory($_POST) > 0) {
            redirect('category/index');
        } else {
            var_dump("Error");
        }
    }

    public function edit($id)
    {
        if(isset($_SESSION['isLogged'])) {
            $data['title'] = "Edit Post";
            $data['category'] = $this->model('CategoryModel')->getCategory($id);
            
            $this->view('templates/header', $data);
            $this->view('category/edit', $data);
            $this->view('templates/footer', $data);
        } else {
            redirect('auth/login');
        }        
    }

    public function update($id)
    {
        if($this->model('CategoryModel')->updateCategory($_POST, $id) > 0) {
            redirect('category/index');
        } else {
            var_dump("Error");
        }
    }

    public function destroy($id)
    {
        if($this->model('CategoryModel')->destroyCategory($id) > 0) {
            redirect('category/index');
        } else {
            var_dump("Error");
        }
    }
}