<?php
class Checkpreviouscamps extends Controller
{
    function index($id = '')
    {

        $cmp=new Camp();
        $currentDate = date('Y-m-d'); 
        $threeMonthsAgo = strtotime('-3 months', strtotime($currentDate));
        $arr=array();
       
        $threeMonthsAgoFormatted = date('Y-m-d', $threeMonthsAgo);
        $arr['date']=$threeMonthsAgoFormatted; //get the date before 3 months from today
        $qry="select c.camp_id,c.latitude,c.longitude from blood_donation_camp c where c.date>=:date"; 
       $data=$cmp->query($qry,$arr);
    //    print_r($data);
       
 
       $d2=$cmp->findCampsWithinRadius($data,6.902642194125529,79.86046625449221,205);
    //    print_r($d2);
        $this->view('checkoldcamps',['d2'=>$d2]);
        
       
    }
}