<?php
class Checkpreviouscamps extends Controller
{
    function index($id = '')
    {

        $cmp=new Camp();
        $qry="select c.camp_id,c.latitude,c.longitude from blood_donation_camp c "; 
       $data=$cmp->query($qry);
       
 
       $d2=$cmp->findCampsWithinRadius($data,6.902642194125529,79.86046625449221,205);
    //    print_r($d2);
        $this->view('checkoldcamps',['d2'=>$d2]);
        
       
    }
}