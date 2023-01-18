<?php 

class Auth extends Controller {
    public function login()
    {
        // $_SESSION['isLogged'] = false;
        if(!isset($_SESSION['isLogged'])) {
            $data['title'] = "Login page";
        
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
        
            $this->view('auth/register', $data);
        } else {
            header('Location: ' . BASE_URL);
        }
    }

    public function registerProcess()
    {
        if($this->model('UserModel')->findUserByEmail($_POST['email'])) {
            Flasher::setFlash("Email already exist", "danger");
            redirect('auth/register');
        } else {
            if($this->model('UserModel')->storeUser($_POST) > 0) {
                Flasher::setFlash("Account created successfully", "success");
                redirect('auth/login');
            } else {            
                Flasher::setFlash("Register failed", "danger");
                redirect('auth/register');
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
                    Flasher::setFlash("Hello, welcome back admin", "success");
                    redirect("dashboard/index");
                } else {
                    redirect("home/index");
                }

            } else {
                Flasher::setFlash("Email or Password incorrect", "danger");
                redirect("auth/login");
            }
        } else {
            Flasher::setFlash("Email not found", "danger");
            redirect("auth/login");
        }
    }

    public function logout()
    {
        session_destroy();
        unset($_SESSION['isLogged']);
        
        redirect('auth/login');
    }

}