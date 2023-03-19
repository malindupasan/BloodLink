<?php
class Addcamp extends Controller
{
    function index($id = '')
    {

        $user = $this->load_model('User');
        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        // $id=Auth::getid();    
        // $data = $user->where("id", $id);
        $cmpreq=new Campreq();
        $arr = ['id' => $id];  

        $query="select * from donation_camp_request where camp_request_id=:id";

        $reqdata=$cmpreq->query($query,$arr);
        $did=$reqdata[0]->bloo;
        $q2="select email from donor where id=:id";
        

        // $reqdata=$reqdata;
       
        $image=new Image();




        if (count($_POST) > 0) {
            $errors = array();

            $camp = $this->load_model('Camp');
            // $user=new User();
            if ($camp->validate($_POST)) {


                if($filename=$image->pic_validate()){
                    $id = Auth::getid();
                    
                    $_POST['camp_img'] = $filename;
                    
                   
               }

               

                $camp->insert($_POST);


                $this->redirect('campaigns');
            } else {
                //errors
                $errors = $camp->errors;
            }
        }

      

        
        // print_r($reqdata);
        $this->view('addcamp',['reqdata'=>$reqdata]);
    }
}

?>