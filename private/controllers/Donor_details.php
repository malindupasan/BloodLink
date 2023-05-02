<?php
class Donor_details extends Controller
{
    public function index()
    {
        $id = 1;
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }

        $donor = new User();
        $data = $donor->where('id', $id);
        $data = $data[0];

        date_default_timezone_set("Asia/Calcutta");
        $date1 = date('Y-m-d');
        $date2 = $data->last_donated;
        $diff = abs(strtotime($date2) - strtotime($date1));
        $years = floor($diff / (365*60*60*24));
        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
        // ?

        
        if($months>=3 || $years>=1){
            $eligible=1;
        }
        else if ($months<3){
            $eligible=0;
        }

        $defect = new Defect();
        $check = $defect->where('donor_id', $id);
        if ($check) {
            $check = $check[0];
        } else {
            $check = 0;
        }
        if (isset($_POST['accept']) > 0) {
            $blood_packet = new Rawblood();
            $arr['donor_id'] = $id;
            $blood_bank_id = $arr['blood_bank_id'] = 2;
            $blood_donation_camp_id = $arr['blood_donation_camp_id'] = 1;
            $blood_packet->insert($arr);
        }
        $this->view('donor_details', ['data' => $data, 'check' => $check,'eligible'=>$eligible]);
    }

}
