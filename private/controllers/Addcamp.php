<?php
class Addcamp extends Controller
{
    function index($id = '')
    {

        $user = $this->load_model('User');
        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $id=Auth::getid();    
        $data = $user->where("id", $id);

        
        $this->view('addcamp', ['rows' => $data[0]]);
    }
}