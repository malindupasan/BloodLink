<?php

class AdminAddStaffDoc extends Controller
{

    function index()
    {

        $user = new Admin_AddStaffDoc();
        if (count($_POST) > 0) {
            $user->insert($_POST);
            $this->redirect('AdminStaffUsers');
            $errors = array();
        }







        $this->view('adminaddstaffdoc'); 

    }
}