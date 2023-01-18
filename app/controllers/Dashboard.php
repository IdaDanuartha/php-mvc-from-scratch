<?php 

class Dashboard extends Controller {
    public function index()
    {
        if(isset($_SESSION['isLogged'])) {
            $data['title'] = "Dashboard";
            $data['post_count'] = $this->model('DashboardModel')->postCount();
            $data['category_count'] = $this->model('DashboardModel')->categoryCount();
            $data['user_count'] = $this->model('DashboardModel')->userCount();
            
            $this->view('templates/header', $data);
            $this->view('dashboard/index', $data);
            $this->view('templates/footer', $data);
        } else {
            redirect('auth/login');
        }
    }
}