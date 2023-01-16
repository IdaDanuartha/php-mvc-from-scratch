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
}

?>