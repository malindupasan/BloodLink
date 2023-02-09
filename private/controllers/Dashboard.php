<?php
$dir = dirname(__DIR__, 2);
require_once($dir . "/public/libraries/tcpdf/tcpdf.php");
class Dashboard extends Controller
{
    function index($id = '')
    {

        if(isset($_POST['fromdate']) && isset($_POST['todate'])){

           
            // $_POST = array();
            $a=$_POST['fromdate'];
           


            $pdf=new TCPDF();

            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor('Nicola Asuni');
            $pdf->SetTitle('TCPDF Example 001');
            $pdf->SetSubject('TCPDF Tutorial');
            $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

            $pdf->SetHeaderData(0, 0,'Sahan 001');


            $pdf->AddPage();
            // $pdf->Cell(50, 0,  $a, 1, 0, 'C', 0, '', 0);
            // $pdf->Cell(0, 0, 'Im sahan', 1, 1, 'C', 0, '', 0);
            $html = '<h1 style="text-align: center">BloodLink</h1>
            
            
            ';
            
            $pdf->writeHTML($html);
            $fname="sahan.pdf";
            
            $pdf->Output($fname,'D');

            echo count($_POST);

            $rbc = new Rbc(); //model instantiated
        $data1 = $rbc->findAll();

        $wbc = new Wbc(); //model instantiated
        $data2 = $wbc->findAll();

        $plsm = new Plasma(); //model instantiated
        $data3 = $plsm->findAll();

        $plt = new Platelettes(); //model instantiated
        $data4 = $plt->findAll();
            $this->view('dashboard', ['rbc' => $data1,'wbc' => $data2,'plsm' => $data3,'plt' => $data4]);



        } else{
            $rbc = new Rbc(); //model instantiated
        $data1 = $rbc->findAll();

        $wbc = new Wbc(); //model instantiated
        $data2 = $wbc->findAll();

        $plsm = new Plasma(); //model instantiated
        $data3 = $plsm->findAll();

        $plt = new Platelettes(); //model instantiated
        $data4 = $plt->findAll();
            $this->view('dashboard', ['rbc' => $data1,'wbc' => $data2,'plsm' => $data3,'plt' => $data4]);        }
        // if(!Auth::logged_in()){
        //     $this->redirect('login');
        // }

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
        $rbc = new Rbc(); //model instantiated
        $data1 = $rbc->findAll();

        $wbc = new Wbc(); //model instantiated
        $data2 = $wbc->findAll();

        $plsm = new Plasma(); //model instantiated
        $data3 = $plsm->findAll();

        $plt = new Platelettes(); //model instantiated
        $data4 = $plt->findAll();

        // $data=$user->where('id', 1);
        //  $this->view('dashboard', ['rbc' => $data1,'wbc' => $data2,'plsm' => $data3,'plt' => $data4]);        //  $this->redirect('404');
        // $this->view('home');
    }
}