

<?php

class AdminAddStaffLab extends Controller
{

    function index()
    {

        $user = new Admin_AddStaffLab();
        if (count($_POST) > 0) {
            $user->insert($_POST);
            $this->redirect('adminstaffuserslabstaff');
            $errors = array();
        }







        $this->view('adminaddstafflab'); 

    }
}