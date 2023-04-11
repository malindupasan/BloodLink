<?php
class Viewdonationschecked extends Controller
{
    function index($id = '')
    {
        $data2=array();
        $bbid=$_SESSION['USER']->blood_bank_id;

        $essentials=array();
        $resultsperpage= 15;

        $bp = new Rawblood();
        // $data = $bp->findAll();
        $data = $bp->findrejected("status",1,"blood_bank_id",$bbid);

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

        $data2= $bp->paginallrejected("status",1,"blood_bank_id",$bbid,$thispagefirstres,$resultsperpage);

        // $q1="SELECT SUM(rbc.amount),blood_bank.blood_bank_id FROM blood_bank 
        //  INNER JOIN rbc ON blood_bank.blood_bank_id=rbc.blood_bank_id
        //  GROUP BY rbc.blood_bank_id";


        // $q2="SELECT SUM(amount) as rsum FROM rbc GROUP BY blood_bank_id
        // UNION
        // SELECT SUM(amount) as wsum FROM wbc GROUP BY blood_bank_id";
         

        // $dada=$bp->query($q2);
        // echo "<pre>";
        // print_r($dada);
    }

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

    

        
        $this->view('viewdonationschecked',['rows' => $data2,'ess' => $essentials]);
       
    }
}
?>