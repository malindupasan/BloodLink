<?php
class Home extends Controller
{
    function index($id = '')
    {


        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $user = $this->load_model('User');

        $email=Auth::getemail();    
        $data = $user->where("email", $email);

        // print_r($data);
        
        $this->view('User/home', ['rows' => $data[0]]);
       
    }
}