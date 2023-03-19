<?php
class Login extends Controller
{
    function index()
    {

        $errors = array();

        if (count($_POST) > 0) {
            $user = new User();
            $usr = new Sysusers();

            if ($row = $user->where('email', $_POST['email'])) {
                $row = $row[0];

                if (password_verify($_POST['password'], $row->password)) {
                    Auth::authenticate($row);
                    $this->redirect('home');
                }
            }
            else if ($row = $user->where('nic', $_POST['email'])) {
                $row = $row[0];

                if (password_verify($_POST['password'], $row->password)) {
                    Auth::authenticate($row);
                    $this->redirect('home');
                }
            }

           
            else if ($row = $usr->where('email', $_POST['email'])) {
                $row = $row[0];
                $errors['nikn'] = $_POST['password'];
                $errors['nikn2'] = $row->password;
                // $this->redirect('home');

                if (password_verify($_POST['password'], $row->password)) {
                    
                    $errors['nikn3'] = "pass eka hri";
                     Auth::authenticate($row);
                    $this->redirect('dashboard');
                }else{
                    $errors['nikn4'] = "pass 1 wrdi"; 
                }
            } 
            $errors['email'] = "wrong Email or Password";



        }

        $this->view('login');
    }
}