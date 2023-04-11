<?php
class Bbbsmanage extends Controller
{
    function index($id = '')
    {
        $counts=array();

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;


        // $bdc = $this->load_model('Bdcreq');

            // $arr['fullname'] = "harini silva";
            // $arr['email'] = "hello@gmail.com";
            // $arr['nic'] = "200016206040";
            // $arr['mobile'] = "0703802708";
            // $arr['city'] = "auckland";
            // $arr['address'] = "1/90 mahiyangana road badulla";
            // $arr['password'] = "$2y$10$.3UNYspSG3a59vZNJpqFPORLv8QUbmRKNOSkp3YDiYkhS.NdsiQ96";
            // $arr['profile_img'] = "";
           $rbc=new Rbc();
           $wbc=new Wbc();
           $plt=new Platelettes();
           $plsm=new Plasma();

           $data1=$rbc->getbscount("blood_bank_id",$bbid);
           $data2=$wbc->getbscount("blood_bank_id",$bbid);
           $data3=$plt->getbscount("blood_bank_id",$bbid);
           $data4=$plsm->getbscount("blood_bank_id",$bbid);

           if($data1){
            $counts['rbc']=count($data1);
           }else{
            $counts['rbc']=0;
           }

           if($data2){
            $counts['wbc']=count($data2);
           }else{
            $counts['wbc']=0;
           }

           if($data3){
            $counts['plt']=count($data3);
           }else{
            $counts['plt']=0;
           }

           if($data4){
            $counts['plsm']=count($data4);
           }else{
            $counts['plsm']=0;
           }

        //    ----------------------------chart data-------------------

        $rbc = new Rbc(); //model instantiated
            $dat1=$rbc->getbgrp("blood_bank_id",$bbid,"blood_group","A+");
            $dat2=$rbc->getbgrp("blood_bank_id",$bbid,"blood_group","A-");
            $dat3=$rbc->getbgrp("blood_bank_id",$bbid,"blood_group","B+");
            $dat4=$rbc->getbgrp("blood_bank_id",$bbid,"blood_group","B-");
            $dat5=$rbc->getbgrp("blood_bank_id",$bbid,"blood_group","AB+");
            $dat6=$rbc->getbgrp("blood_bank_id",$bbid,"blood_group","AB-");
            $dat7=$rbc->getbgrp("blood_bank_id",$bbid,"blood_group","O+");
            $dat8=$rbc->getbgrp("blood_bank_id",$bbid,"blood_group","O-");

            $rbcarray['Ap']=$dat1[0]->sum;
            $rbcarray['An']=$dat2[0]->sum;
            $rbcarray['Bp']=$dat3[0]->sum;
            $rbcarray['Bn']=$dat4[0]->sum;
            $rbcarray['ABp']=$dat5[0]->sum;
            $rbcarray['ABn']=$dat6[0]->sum;
            $rbcarray['Op']=$dat7[0]->sum;
            $rbcarray['On']=$dat8[0]->sum;

        //     echo "<pre>";
        // print_r($data1);

        $wbc = new Wbc(); //model instantiated
        $dat1=$wbc->getbgrp("blood_bank_id",$bbid,"blood_group","A+");
        $dat2=$wbc->getbgrp("blood_bank_id",$bbid,"blood_group","A-");
        $dat3=$wbc->getbgrp("blood_bank_id",$bbid,"blood_group","B+");
        $dat4=$wbc->getbgrp("blood_bank_id",$bbid,"blood_group","B-");
        $dat5=$wbc->getbgrp("blood_bank_id",$bbid,"blood_group","AB+");
        $dat6=$wbc->getbgrp("blood_bank_id",$bbid,"blood_group","AB-");
        $dat7=$wbc->getbgrp("blood_bank_id",$bbid,"blood_group","O+");
        $dat8=$wbc->getbgrp("blood_bank_id",$bbid,"blood_group","O-");

        $wbcarray['Ap']=$dat1[0]->sum;
        $wbcarray['An']=$dat2[0]->sum;
        $wbcarray['Bp']=$dat3[0]->sum;
        $wbcarray['Bn']=$dat4[0]->sum;
        $wbcarray['ABp']=$dat5[0]->sum;
        $wbcarray['ABn']=$dat6[0]->sum;
        $wbcarray['Op']=$dat7[0]->sum;
        $wbcarray['On']=$dat8[0]->sum;

        $plsm = new Plasma(); //model instantiated
        $dat1=$plsm->getbgrp("blood_bank_id",$bbid,"blood_group","A+");
        $dat2=$plsm->getbgrp("blood_bank_id",$bbid,"blood_group","A-");
        $dat3=$plsm->getbgrp("blood_bank_id",$bbid,"blood_group","B+");
        $dat4=$plsm->getbgrp("blood_bank_id",$bbid,"blood_group","B-");
        $dat5=$plsm->getbgrp("blood_bank_id",$bbid,"blood_group","AB+");
        $dat6=$plsm->getbgrp("blood_bank_id",$bbid,"blood_group","AB-");
        $dat7=$plsm->getbgrp("blood_bank_id",$bbid,"blood_group","O+");
        $dat8=$plsm->getbgrp("blood_bank_id",$bbid,"blood_group","O-");

        $plsmarray['Ap']=$dat1[0]->sum;
        $plsmarray['An']=$dat2[0]->sum;
        $plsmarray['Bp']=$dat3[0]->sum;
        $plsmarray['Bn']=$dat4[0]->sum;
        $plsmarray['ABp']=$dat5[0]->sum;
        $plsmarray['ABn']=$dat6[0]->sum;
        $plsmarray['Op']=$dat7[0]->sum;
        $plsmarray['On']=$dat8[0]->sum;

        $plt = new Platelettes(); //model instantiated
        $dat1=$plt->getbgrp("blood_bank_id",$bbid,"blood_group","A+");
        $dat2=$plt->getbgrp("blood_bank_id",$bbid,"blood_group","A-");
        $dat3=$plt->getbgrp("blood_bank_id",$bbid,"blood_group","B+");
        $dat4=$plt->getbgrp("blood_bank_id",$bbid,"blood_group","B-");
        $dat5=$plt->getbgrp("blood_bank_id",$bbid,"blood_group","AB+");
        $dat6=$plt->getbgrp("blood_bank_id",$bbid,"blood_group","AB-");
        $dat7=$plt->getbgrp("blood_bank_id",$bbid,"blood_group","O+");
        $dat8=$plt->getbgrp("blood_bank_id",$bbid,"blood_group","O-");

        $pltarray['Ap']=$dat1[0]->sum;
        $pltarray['An']=$dat2[0]->sum;
        $pltarray['Bp']=$dat3[0]->sum;
        $pltarray['Bn']=$dat4[0]->sum;
        $pltarray['ABp']=$dat5[0]->sum;
        $pltarray['ABn']=$dat6[0]->sum;
        $pltarray['Op']=$dat7[0]->sum;
        $pltarray['On']=$dat8[0]->sum;
    // -----------------------------------chart data end-----------------------

    if($_SERVER['REQUEST_METHOD'] === 'POST') {//-----------------ajax start
        

        $response = array("rbc" => $rbcarray, "wbc" => $wbcarray,"plt" => $pltarray,"plsm" => $plsmarray);

        echo json_encode($response);
    } else {
        // $this->view('staff/dashboard', ['rbc' => $data1,'wbc' => $data2,'plsm' => $data3,'plt' => $data4,'ess'=>$essentials]);  
        $this->view('bbbsmanage', ['rows' => $counts]);//------------------ajax end

    }




        // $user->insert($arr);
        // $user->delete(25);
        // $bdc = new Bdcreq(); //model instantiated
        // $data = $bdc->findAll();
        // echo "<pre>";
        // print_r($data);

        // $data=$user->where('id', 1);
        //  $this->redirect('404');
        // $this->view('home');
    }
}