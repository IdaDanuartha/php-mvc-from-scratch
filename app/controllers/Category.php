<?php 

class Category extends Controller {
    public function index()
    {
        $data['title'] = "Category page";
        $data['categories'] = $this->model('CategoryModel')->getCategories();
        
        $this->view('templates/header', $data);
        $this->view('category/index', $data);
        $this->view('templates/footer', $data);
    }

    public function create()
    {
        $data['title'] = "Add Category";
        
        $this->view('templates/header', $data);
        $this->view('category/create', $data);
        $this->view('templates/footer', $data);
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
        $data['title'] = "Edit Post";
        $data['category'] = $this->model('CategoryModel')->getCategory($id);
        
        $this->view('templates/header', $data);
        $this->view('category/edit', $data);
        $this->view('templates/footer', $data);
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