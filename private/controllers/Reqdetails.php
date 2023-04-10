<?php
class Reqdetails extends Controller
{
    function index($id = '')
    {   
        $id=$_GET['id'];
        // print_r($id);

        $bdc=new BLBdc();

        if(count($_POST)>0){

            // echo $_POST['docid'];
            $arr['doctor_id'] = $_POST['docid'];

            $bdc->updatedoc($id,$arr);
            $this->redirect('upbdconly');

        }
        
        $bbid=$_SESSION['USER']->blood_bank_id;

        $doc=new BLDoc();
        $q1="SELECT * FROM doctor WHERE blood_bank_id=$bbid";
        $data1=$doc->query($q1);
        // echo"<pre>";
        // print_r($data1);

        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        

        if($id){
            $data=$bdc->where("camp_id",$id);
            // echo "<pre>";
            // print_r($data);
        }


        // $bdc = $this->load_model('Bdcreq');

            // $arr['fullname'] = "harini silva";
            // $arr['email'] = "hello@gmail.com";
            // $arr['nic'] = "200016206040";
            // $arr['mobile'] = "0703802708";
            // $arr['city'] = "auckland";
            // $arr['address'] = "1/90 mahiyangana road badulla";
            // $arr['password'] = "$2y$10$.3UNYspSG3a59vZNJpqFPORLv8QUbmRKNOSkp3YDiYkhS.NdsiQ96";
            // $arr['profile_img'] = "";


        // $user->insert($arr);
        // $user->delete(25);
        // $data = $bdc->findAll();

        // $data=$user->where('id', 1);
        $this->view('reqdetails', ['rows' => $data[0],'rows2'=>$data1]);
        // $this->view('home');
    }
}