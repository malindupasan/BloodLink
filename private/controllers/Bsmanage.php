<?php
class Bsmanage extends Controller
{
    function index($id = '')
    {


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
        $rbc = new Rbc(); //model instantiated
        $data1 = $rbc->findAll();

        $wbc = new Wbc(); //model instantiated
        $data2 = $wbc->findAll();

        $plsm = new Plasma(); //model instantiated
        $data3 = $plsm->findAll();

        $plt = new Platelettes(); //model instantiated
        $data4 = $plt->findAll();

        // $data=$user->where('id', 1);
         $this->view('bsmanage', ['rbc' => $data1,'wbc' => $data2,'plsm' => $data3,'plt' => $data4]);
        //  $this->redirect('404');
        // $this->view('home');
    }
}