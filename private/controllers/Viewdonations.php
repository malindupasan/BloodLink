<?php
class Viewdonations extends Controller
{
    function index($id = '')
    {   
        $bbid=$_SESSION['USER']->blood_bank_id;
        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        $data2=array();
        $essentials=array();
        $resultsperpage= 8;

        $bp = new Rawblood();
        $q1="SELECT * FROM raw_blood_packet WHERE blood_bank_id=$bbid AND status=0";
        $data = $bp->query($q1);

        if($data!=NULL){
            $numofresults=count($data);
            $numofpages= ceil($numofresults/$resultsperpage);

            $essentials['noofpgs']=$numofpages;

            if(!isset($_GET['page']) or $_GET['page']> $numofpages or $_GET['page']< 1){
                $page=1;
            } else{
                $page=$_GET['page'];
            }

            $thispagefirstres=($page-1)*$resultsperpage;
            $q2="SELECT * FROM raw_blood_packet WHERE blood_bank_id=$bbid AND status=0 limit $thispagefirstres,$resultsperpage";
            $data2 = $bp->query($q2);


        }

        


      

    

        
        $this->view('viewdonations',['rows' => $data2,'ess' => $essentials]);
       
    }
}
?>