<?php
class Campfeedback extends Controller
{
    function index($id = '')
    {

        $campfb = new Campfeedback2();
        // $campfb = $this->load_model('Campfeedback');
        // $data = $camp->where("campID", $id);
        echo $id;
        

       

        if(count($_POST)>2){
            $_POST['campId'] = "C001";
            // $arr['rate'] = $_POST['rate'];
            // $arr['email'] = $_POST['email'];
            // $arr['feedback'] = $_POST['feedback'];
            print_r($_POST);
            $campfb->insert($_POST);
        }
        



        
        $this->view('campfeedback');
        
    }
}