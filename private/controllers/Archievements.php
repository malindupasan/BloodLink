<?php
class Archievements extends Controller
{
    function index($id = '')
    {

    $uid=AUTH::getid();
    $arr=array();
    $arr['uid']=$uid;

        $bpckt=new Rawblood();
        $q1="select count(packet_id) from raw_blood_packet where donor_id=:uid"; 




       
        $this->view('archievements');
        
       
    }
}