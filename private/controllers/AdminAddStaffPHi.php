<?php

class AdminAddStaffPHi extends Controller
{

    function index()
    {

        $user = new Admin_AddStaffPHi();
        if (count($_POST) > 0) {
            $user->insert($_POST);
            $this->redirect('adminstaffusersphi');
            $errors = array();
        }







        $this->view('adminaddstaffphi'); 

    }
}