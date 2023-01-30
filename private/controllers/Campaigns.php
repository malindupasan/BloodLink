<?php
class Campaigns extends Controller
{
    function index($id = '')
    {


        if(!Auth::logged_in()){
            $this->redirect('login');
        }

      

        $camp = new Camp();

        // $id=Auth::getid();    
         $data = $camp->findAll();
        // echo "<pre>";
        // print_r($data);
        
        $this->view('campaigns', [$data]);
       
        
    }
}