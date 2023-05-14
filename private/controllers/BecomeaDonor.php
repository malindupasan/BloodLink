<?php
class BecomeaDonor extends Controller
{
    function index()
    {
        $user = new User();

        if (!Auth::logged_in()) {
            $this->redirect('login');
        }
        $data = $user->where('id', Auth::getid());

        if (isset($_GET['click'])) {
            $click = $_GET['click'];
            if($click=='wheretodonate'){
            $bloodbank = new Bloodbank();
            $query = "select * from blood_bank ";
            $data = $bloodbank->query($query);
            // print_r($data);
            $this->view('User/wheretodonate', [$data]);
        }
        else if($click=='amieligible'){
            $this->view('User/amieligible', ['rows' => $data]);
        }else if($click=='whendonating'){
             $this->view('User/whendonating', ['rows' => $data]);
        }else if($click=='beforedonate'){
             $this->view('User/beforedonate', ['rows' => $data]);
        }else if($click=='afterdonate'){
             $this->view('User/afterdonate', ['rows' => $data]);
        }else if($click=='waystodonate'){
            $this->view('User/waystodonate', ['rows' => $data]);
        }

        }
        else{$this->view('User/waystodonate', ['rows' => $data]);
        }

       
       
        
        
    }

}