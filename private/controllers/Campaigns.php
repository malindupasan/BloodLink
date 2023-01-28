<?php
class Campaigns extends Controller
{
    function index($id = '')
    {


        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $user = $this->load_model('User');

        $id=Auth::getid();    
        $data = $user->where("id", $id);

        
        $this->view('campaigns', ['rows' => $data[0]]);
       
        
    }
}