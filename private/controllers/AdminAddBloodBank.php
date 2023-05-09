<?php

class AdminAddBloodBank extends Controller
{

    function index()
    {

        $user = new Admin_AddBloodBank();
        if (count($_POST) > 0) {
            $user->insert($_POST);
            $this->redirect('adminhome');
            $errors = array();
        }


        $this->view('adminaddbloodbank'); 

    }
}