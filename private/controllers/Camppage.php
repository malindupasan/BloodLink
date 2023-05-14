<?php
class Camppage extends Controller
{
    function index($id = '')
    {


        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        // print_r($_GET['id']);
        $id = $_GET['id'];

        $camp = new Camp();

        if ($id) {
            $arr=array();
            $arr['id'] = $id;
            $qry="select * from campDetails where camp_id = :id";
            $reqdata=$camp->query($qry,$arr);

            // $data = $camp->where("camp_id",$id);
            
            $this->view('User/camppage', ['rows' =>$reqdata[0]]);
        }
        else{
            print_r($id);
            echo "$id";
            echo "not found";
        }
        
    }
}