<?php
class Editprofile extends Controller
{
    function index($id = '')
    {


        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $user = $this->load_model('User');

        $id=Auth::getid();    
        $data = $user->where("id", $id);

        



        // $data=$user->where('id', 1);
        $this->view('editprofile', ['rows' => $data]);
        // $this->view('home');
    }
}