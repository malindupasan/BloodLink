<?php
class Defectblood extends Controller
{
    function index($id = '')
    {
        $bbid=$_SESSION['USER']->blood_bank_id;


        if(!Auth::logged_in()){
            $this->redirect('login');
        }
// ----------------------------------pagination-----------------------
        $data2=array();

        $essentials=array();
        $resultsperpage= 15;

        $bdc = new BLDefect();
        $query1="select defect.*,doctor.blood_bank_id,doctor.name,donor.name AS donname FROM defect INNER JOIN doctor ON defect.doctor_id=doctor.id INNER JOIN donor ON defect.donor_id=donor.id where doctor.blood_bank_id=$bbid";

        // $data = $bdc->finddefects("blood_bank_id",$bbid);
        $data=$bdc->query($query1);

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

        $query2="select defect.*,doctor.blood_bank_id,doctor.name,donor.name AS donname FROM defect INNER JOIN doctor ON defect.doctor_id=doctor.id INNER JOIN donor ON defect.donor_id=donor.id where doctor.blood_bank_id=$bbid order by defect.defect_id limit $thispagefirstres,$resultsperpage";


        $data2=$bdc->query($query2);
        // echo "<pre>";
        // print_r($data2);
        }
// ----------------------------------pagination end----------------------
        

        
        $this->view('defectblood',['rows'=>$data2,'ess'=>$essentials]);
       
    }

    
    function index2(){
        $bbid=$_SESSION['USER']->blood_bank_id;

        if (count($_POST) > 0) {

            $text = $_POST['text'];
            $text=addslashes($text);
            
            $bdc = new BLDefect();
            $stm="select defect.*,doctor.blood_bank_id,doctor.name,donor.name AS donname FROM defect INNER JOIN doctor ON defect.doctor_id=doctor.id INNER JOIN donor ON defect.donor_id=donor.id where doctor.blood_bank_id=$bbid AND donor.name like '$text%'";
    


            
            $results=$bdc->query($stm);
            
            echo json_encode($results);
            // $data = $user->query($query);
            // echo (json_encode($data));
             }
    }
}