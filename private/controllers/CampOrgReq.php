<?php
class CampOrgReq extends Controller
{
    function index($id = '')
    {


        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        $creq=new Campreq(); 
        unset($_GET['url']);
        if(isset($_GET)&&count($_GET)>0){
            // print_r($_GET);
            $_GET['donor_id']=Auth::getid();
           
            $creq->insert($_GET);
        }
        $qry="select blood_bank_id,name,latitude,longitude from blood_bank";
       $data=$creq->query($qry) ;
       print_r($data[1]->longitude);




        $this->view('reqdonationcamp');
        
    }
}
?>