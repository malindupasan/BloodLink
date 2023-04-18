<?php
class Bldrequestform extends Controller
{
    function index($id = '')
    {

        $did=$_SESSION['USER']->id;
        $bbid=$_SESSION['USER']->blood_bank_id;
        $date=date('Y-m-d');

        if(isset($_POST['addtocart'])){
            // echo "added to cart";
            $str1;
            $str2;

            switch ($_POST['bt']) {
                case "RBC":
                  $str1="r";
                  break;
                case "WBC":
                    $str1="w";     
                     break;
                case "Platelettes":
                    $str1="plt";
                      break;
                  case "Plasma":
                    $str1="plsm";
                    break;
                default:
                  echo "unknown.";
                  break;
              }

              switch ($_POST['bg']) {
                case "Ap":
                  $str2="Ap";
                  break;
                case "An":
                    $str2="An";     
                     break;
                case "Bp":
                    $str2="Bp";
                      break;
                case "Bn":
                    $str2="Bn";
                    break;
                case "ABp":
                  $str2="ABp";
                  break;
                case "ABn":
                    $str2="ABn";     
                     break;
                case "Op":
                    $str2="Op";
                      break;
                case "On":
                    $str2="On";
                    break;
                default:
                  echo "unknown.";
                  break;
              }

              $str=$str1.$str2;

            if(isset($_SESSION['cart'])){
                $count=count($_SESSION['cart']);
                $itemarray=array(
                    'btype'=> $_POST['bt'],
                    'bgrp'=> $_POST['bg'],
                    'bamnt'=> $_POST['amnt'],
                    'name'=>$str

                );
                $_SESSION['cart'][$count] = $itemarray;

            } else{
                $itemarray=array(
                    'btype'=> $_POST['bt'],
                    'bgrp'=> $_POST['bg'],
                    'bamnt'=> $_POST['amnt'],
                    'name'=>$str

                );
                $_SESSION['cart'][0] = $itemarray;
            }
        }

        if(isset($_POST['sendreq'])){
            echo "<pre>";
            print_r($_POST);
            $breq=new BLbldreq();
            $breq->insert($_POST);

            unset($_SESSION['cart']);

            $this->redirect('viewstatusbldrequests');

        }

        if(isset($_POST['clearall'])){
            unset($_SESSION['cart']);

        }

        // if(count($_POST)>0){


            
        //     $arr['doctor_id'] = $_POST['did'];
        //     $arr['date'] = $date;
        //     $arr['blood_bank_id_destination'] = $_POST['bb'];
        //     $arr['blood_bank_id_source'] = $bbid;

        //     $arr['rAp'] = $_POST['rAp'];
        //     $arr['rAn'] = $_POST['rAn'];
        //     $arr['rBp'] = $_POST['rBp'];
        //     $arr['rBn'] = $_POST['rBn'];
        //     $arr['rABp'] = $_POST['rABp'];
        //     $arr['rABn'] = $_POST['rABn'];
        //     $arr['rOp'] = $_POST['rOp'];
        //     $arr['rOn'] = $_POST['rOn'];

        //     $arr['wAp'] = $_POST['wAp'];
        //     $arr['wAn'] = $_POST['wAn'];
        //     $arr['wBp'] = $_POST['wBp'];
        //     $arr['wBn'] = $_POST['wBn'];
        //     $arr['wABp'] = $_POST['wABp'];
        //     $arr['wABn'] = $_POST['wABn'];
        //     $arr['wOp'] = $_POST['wOp'];
        //     $arr['wOn'] = $_POST['wOn'];

        //     $arr['pltAp'] = $_POST['pltAp'];
        //     $arr['pltAn'] = $_POST['pltAn'];
        //     $arr['pltBp'] = $_POST['pltBp'];
        //     $arr['pltBn'] = $_POST['pltBn'];
        //     $arr['pltABp'] = $_POST['pltABp'];
        //     $arr['pltABn'] = $_POST['pltABn'];
        //     $arr['pltOp'] = $_POST['pltOp'];
        //     $arr['pltOn'] = $_POST['pltOn'];

        //     $arr['plsmAp'] = $_POST['plsmAp'];
        //     $arr['plsmAn'] = $_POST['plsmAn'];
        //     $arr['plsmBp'] = $_POST['plsmBp'];
        //     $arr['plsmBn'] = $_POST['plsmBn'];
        //     $arr['plsmABp'] = $_POST['plsmABp'];
        //     $arr['plsmABn'] = $_POST['plsmABn'];
        //     $arr['plsmOp'] = $_POST['plsmOp'];
        //     $arr['plsmOn'] = $_POST['plsmOn'];

        //     $arr['status'] = 0;





       





        // }

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bb=new BLBloodbank();
        $bbdata=$bb->findAll();
        // print_r($bbdata);

        

        

        // echo "<pre>";
        // print_r($docdata);

        

        
        $this->view('bldrequestform',['rows'=>$bbdata]);
       
    }
}