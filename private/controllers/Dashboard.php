<?php
$dir = dirname(__DIR__, 2);
require_once($dir . "/public/libraries/tcpdf/tcpdf.php");
class Dashboard extends Controller
{
    function index($id = '')
    {   
        $month=date('m');
        $year=date('Y');

        $bbid=$_SESSION['USER']->blood_bank_id;

        $essentials=array();
       

        // ---------------------------------this month bdc-------------------------------
            $bdc=new BLBdc();
       
            $data=$bdc->thismonthcamps("blood_bank_id",$bbid,"date",$month,$year);
            if ($data!=NULL){
                $essentials['bdccount']=count($data);

            }else{
                $essentials['bdccount']=0;

            }

        // -------------------------------------this month bdc end-----------------------------

        // ---------------------------------this month donations-------------------------------
        $bdc=new Rawblood();
       
        $data=$bdc->thismonthdonations("blood_bank_id",$bbid,"collected_date",$month,$year);
        if ($data!=NULL){
            $essentials['donationcount']=count($data);

        }else{
            $essentials['donationcount']=0;

        }

    // -------------------------------------this month donations end-----------------------------

    // ---------------------------------this month donors-------------------------------
    
       
    $data=$bdc->thismonthdonors("blood_bank_id",$bbid,"collected_date",$month,$year);
    if ($data!=NULL){
        $essentials['donorcount']=count($data);

    }else{
        $essentials['donorcount']=0;

    }

// -------------------------------------this month donors end-----------------------------


    $datdef=$bdc->thismonthdefect("blood_bank_id",$bbid,"collected_date",$month,$year);
    $thismonthrej['rej']=$datdef[0]->count;

    $datnondef=$bdc->thismonthnondefect("blood_bank_id",$bbid,"collected_date",$month,$year);
    $thismonthrej['nonrej']=$datnondef[0]->count;

    $datdef=$bdc->thisyeardefect("blood_bank_id",$bbid,"collected_date",$year);
    $thisyearrej['rej']=$datdef[0]->count;

    $datnondef=$bdc->thisyearnondefect("blood_bank_id",$bbid,"collected_date",$year);
    $thisyearrej['nonrej']=$datnondef[0]->count;

            $rbc = new Rbc(); //model instantiated
            $data1=$rbc->getbgrp("blood_bank_id",$bbid,"blood_group","A+");
            $data2=$rbc->getbgrp("blood_bank_id",$bbid,"blood_group","A-");
            $data3=$rbc->getbgrp("blood_bank_id",$bbid,"blood_group","B+");
            $data4=$rbc->getbgrp("blood_bank_id",$bbid,"blood_group","B-");
            $data5=$rbc->getbgrp("blood_bank_id",$bbid,"blood_group","AB+");
            $data6=$rbc->getbgrp("blood_bank_id",$bbid,"blood_group","AB-");
            $data7=$rbc->getbgrp("blood_bank_id",$bbid,"blood_group","O+");
            $data8=$rbc->getbgrp("blood_bank_id",$bbid,"blood_group","O-");

            $rbcarray['Ap']=$data1[0]->sum;
            $rbcarray['An']=$data2[0]->sum;
            $rbcarray['Bp']=$data3[0]->sum;
            $rbcarray['Bn']=$data4[0]->sum;
            $rbcarray['ABp']=$data5[0]->sum;
            $rbcarray['ABn']=$data6[0]->sum;
            $rbcarray['Op']=$data7[0]->sum;
            $rbcarray['On']=$data8[0]->sum;

        //     echo "<pre>";
        // print_r($data1);

        $wbc = new Wbc(); //model instantiated
        $data1=$wbc->getbgrp("blood_bank_id",$bbid,"blood_group","A+");
        $data2=$wbc->getbgrp("blood_bank_id",$bbid,"blood_group","A-");
        $data3=$wbc->getbgrp("blood_bank_id",$bbid,"blood_group","B+");
        $data4=$wbc->getbgrp("blood_bank_id",$bbid,"blood_group","B-");
        $data5=$wbc->getbgrp("blood_bank_id",$bbid,"blood_group","AB+");
        $data6=$wbc->getbgrp("blood_bank_id",$bbid,"blood_group","AB-");
        $data7=$wbc->getbgrp("blood_bank_id",$bbid,"blood_group","O+");
        $data8=$wbc->getbgrp("blood_bank_id",$bbid,"blood_group","O-");

        $wbcarray['Ap']=$data1[0]->sum;
        $wbcarray['An']=$data2[0]->sum;
        $wbcarray['Bp']=$data3[0]->sum;
        $wbcarray['Bn']=$data4[0]->sum;
        $wbcarray['ABp']=$data5[0]->sum;
        $wbcarray['ABn']=$data6[0]->sum;
        $wbcarray['Op']=$data7[0]->sum;
        $wbcarray['On']=$data8[0]->sum;

        $plsm = new Plasma(); //model instantiated
        $data1=$plsm->getbgrp("blood_bank_id",$bbid,"blood_group","A+");
        $data2=$plsm->getbgrp("blood_bank_id",$bbid,"blood_group","A-");
        $data3=$plsm->getbgrp("blood_bank_id",$bbid,"blood_group","B+");
        $data4=$plsm->getbgrp("blood_bank_id",$bbid,"blood_group","B-");
        $data5=$plsm->getbgrp("blood_bank_id",$bbid,"blood_group","AB+");
        $data6=$plsm->getbgrp("blood_bank_id",$bbid,"blood_group","AB-");
        $data7=$plsm->getbgrp("blood_bank_id",$bbid,"blood_group","O+");
        $data8=$plsm->getbgrp("blood_bank_id",$bbid,"blood_group","O-");

        $plsmarray['Ap']=$data1[0]->sum;
        $plsmarray['An']=$data2[0]->sum;
        $plsmarray['Bp']=$data3[0]->sum;
        $plsmarray['Bn']=$data4[0]->sum;
        $plsmarray['ABp']=$data5[0]->sum;
        $plsmarray['ABn']=$data6[0]->sum;
        $plsmarray['Op']=$data7[0]->sum;
        $plsmarray['On']=$data8[0]->sum;

        $plt = new Platelettes(); //model instantiated
        $data1=$plt->getbgrp("blood_bank_id",$bbid,"blood_group","A+");
        $data2=$plt->getbgrp("blood_bank_id",$bbid,"blood_group","A-");
        $data3=$plt->getbgrp("blood_bank_id",$bbid,"blood_group","B+");
        $data4=$plt->getbgrp("blood_bank_id",$bbid,"blood_group","B-");
        $data5=$plt->getbgrp("blood_bank_id",$bbid,"blood_group","AB+");
        $data6=$plt->getbgrp("blood_bank_id",$bbid,"blood_group","AB-");
        $data7=$plt->getbgrp("blood_bank_id",$bbid,"blood_group","O+");
        $data8=$plt->getbgrp("blood_bank_id",$bbid,"blood_group","O-");

        $pltarray['Ap']=$data1[0]->sum;
        $pltarray['An']=$data2[0]->sum;
        $pltarray['Bp']=$data3[0]->sum;
        $pltarray['Bn']=$data4[0]->sum;
        $pltarray['ABp']=$data5[0]->sum;
        $pltarray['ABn']=$data6[0]->sum;
        $pltarray['Op']=$data7[0]->sum;
        $pltarray['On']=$data8[0]->sum;


            
        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        // $bdc = $this->load_model('Bdcreq');

            // $arr['fullname'] = "harini silva";
            // $arr['email'] = "hello@gmail.com";
            // $arr['nic'] = "200016206040";
            // $arr['mobile'] = "0703802708";
            // $arr['city'] = "auckland";
            // $arr['address'] = "1/90 mahiyangana road badulla";
            // $arr['password'] = "$2y$10$.3UNYspSG3a59vZNJpqFPORLv8QUbmRKNOSkp3YDiYkhS.NdsiQ96";
            // $arr['profile_img'] = "";


        // $user->insert($arr);
        // $user->delete(25);
        // $bdc = new Bdcreq(); //model instantiated
        // $data = $bdc->findAll();

        // $data=$user->where('id', 1);
        // $rbc = new Rbc(); //model instantiated
        // $data1 = $rbc->findAll();

        // $wbc = new Wbc(); //model instantiated
        // $data2 = $wbc->findAll();

        // $plsm = new Plasma(); //model instantiated
        // $data3 = $plsm->findAll();

        // $plt = new Platelettes(); //model instantiated
        // $data4 = $plt->findAll();

        // $data=$user->where('id', 1);
        //  $this->view('dashboard', ['rbc' => $data1,'wbc' => $data2,'plsm' => $data3,'plt' => $data4]);        //  $this->redirect('404');
        // $this->view('home');
        
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            // $data = array('key1' => 'value1', 'key2' => 'value2');
            // $data2 = array('key3' => 'value3', 'key4' => 'value4');
            // $data3 = array('key1' => 'value1', 'key2' => 'value2');
            // $data4 = array('key3' => 'value3', 'key4' => 'value4');

            $response = array("rbc" => $rbcarray, "wbc" => $wbcarray,"plt" => $pltarray,"plsm" => $plsmarray,'rejthismonth'=>$thismonthrej,'rejthisyear'=>$thisyearrej);
                
            // $response2 = array("data3" => $data3, "data4" => $data4);

            // $full=array("res" => $response, "res2" => $response2) ;

            echo json_encode($response);
        } else {
            $this->view('dashboard', ['rbc' => $data1,'wbc' => $data2,'plsm' => $data3,'plt' => $data4,'ess'=>$essentials]);        
        }
    }
}