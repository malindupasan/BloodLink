
<?php

class AdminPublicUsersProfile extends Controller
{

    function index($id = '')
    {
        $bank = new Admin_PublicUsersProfile();
        $id = $_GET['id'];
        $quary = "SELECT * FROM donor WHERE id = $id";
        $data = $bank->query($quary);


        $this->view('adminpublicusersprofile', ['rows' => $data]);

    }
}