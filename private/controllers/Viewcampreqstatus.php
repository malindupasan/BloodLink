<?php
class Viewcampreqstatus extends Controller
{
    function index($id='')
    {


        if (!Auth::logged_in()) {
            $this->redirect('login');
        }
        $id=Auth::getid();
        $arr = ['id' => $id];  
        $cmprq=new Campreq();
        $query = "select * from donation_camp_request where donor_id = :id";
        $data=$cmprq->query($query,$arr);
        ;
        // print_r([$data]);
        $this->view('mycamprequests',[$data]);


    }

}