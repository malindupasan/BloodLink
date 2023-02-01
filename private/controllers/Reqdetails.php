<?php
class Reqdetails extends Controller
{
    function index($id = '')
    {


        // if(!Auth::logged_in()){
        //     $this->redirect('login');
        // }
        $id=$_GET['id'];
        // print_r($id);

        $bdr=new Bdcreq();

        if($id){
            $data=$bdr->where("id",$id);
            // echo "<pre>";
            // print_r($data[0]);
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
        $this->view('reqdetails', ['rows' => $data[0]]);
        // $this->view('home');
    }
}