<?php
class Viewbldrequests extends Controller
{
    function index($id = '')
    {


        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        

        
        $this->view('viewbldrequests');
       
    }
}