<?php
class Approval extends Controller
{
    function index($id = '')
    {
        $id=$_GET['id'];
        // print_r($id);

        $st=$_GET['stat'];
        // print_r($st);

        $arr=['accrej'=>$st];

        // echo "<pre>";
        // print_r($arr['nnn']);

        $bdapp=new Bdcreq();

        if($id){
            $bdapp->update($id,$arr);
            $this->redirect('main');

            // $data=$bdr->where("id",$id);
            // echo "<pre>";
            // print_r($data[0]);
        }

        // if(!Auth::logged_in()){
        //     $this->redirect('login');
        // }

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
        // $this->view('home');//, ['rows' => $data]);
        // $this->view('tempappr');
    }
}