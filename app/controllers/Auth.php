<?php 

class Auth extends Controller {
    public function login()
    {
        // $_SESSION['isLogged'] = false;
        if(!isset($_SESSION['isLogged'])) {
            $data['title'] = "Login page";
            $data['message'] = "";
        
            $this->view('auth/login', $data);
        } else {
            header('Location: ' . BASE_URL);
        }
    }

    public function register()
    {    
        // $_SESSION['isLogged'] = false;
        if(!isset($_SESSION['isLogged'])) {
            $data['title'] = "Register page";
            $data['message'] = "";
        
            $this->view('auth/register', $data);
        } else {
            header('Location: ' . BASE_URL);
        }
    }

    public function registerProcess()
    {
        if($this->model('UserModel')->findUserByEmail($_POST['email'])) {
            $data['title'] = 'Register page';
            $data['message'] = 'Email already exist';
            $this->view('auth/register', $data);
        } else {
            if($this->model('UserModel')->storeUser($_POST) > 0) {
                redirect('auth/login');
            } else {            
                $data['title'] = 'Register page';
                $data['message'] = 'Register Failed';
                $this->view('auth/register', $data);
            }
        }
    }
    
    public function loginProcess()
    {
        if($this->model('UserModel')->findUserByEmail($_POST['email'])) {
            $loginInUser = $this->model('UserModel')->login($_POST);
            if($loginInUser) {
                $this->model("UserModel")->session($loginInUser);

                if($_SESSION['level'] == 'admin') {
                    redirect("");
                } else {
                    redirect("/home/index");
                }

            } else {
                $data['title'] = 'Login page';
                $data['message'] = 'Email or Password Incorrect';
                $this->view('auth/login', $data);
            }
        } else {
            $data['title'] = 'Login page';
            $data['message'] = 'Email Not Found';
            $this->view('auth/login', $data);
        }
    }

    public function logout()
    {
        session_destroy();
        unset($_SESSION['isLogged']);
        
        redirect('auth/login');
    }

}