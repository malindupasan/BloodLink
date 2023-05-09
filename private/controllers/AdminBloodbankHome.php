
<?php

class AdminBloodbankHome extends Controller
{

    function index($id = '')
    {
        $bank = new Admin_BloodbankHome();
        $id = $_GET['id'];
        $quary = "SELECT * FROM blood_bank WHERE blood_bank_id = $id";
        $data = $bank->query($quary);

        $this->view('adminbloodbankhome', ['rows' => $data]);

    }
}