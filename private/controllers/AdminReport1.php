<?php

class AdminReport1 extends Controller
{

    function index($id = '')
    {


        $num4 = new Admin_Home();
        $quary4 = "SELECT SUM(amount) AS RBC FROM rbc;";
        $data4 = $num4->query($quary4);

        $num5 = new Admin_Home();
        $quary5 = "SELECT SUM(amount) AS WBC FROM wbc";
        $data5 = $num5->query($quary5);

        $num6 = new Admin_Home();
        $quary6 = "SELECT SUM(amount) AS PLATE FROM platelets";
        $data6 = $num6->query($quary6);

        $num7 = new Admin_Home();
        $quary7 = "SELECT SUM(amount) AS PLASMA FROM plasma";
        $data7 = $num7->query($quary7);

        $num3 = new Admin_Home();
        $quary3 = "SELECT COUNT(*) AS DEF FROM defect";
        $data3 = $num3->query($quary3);

        $num9 = new Admin_Home();
        $quary9 = "SELECT COUNT(*) AS BDC FROM blood_donation_camp WHERE date >= DATE_SUB(NOW(), INTERVAL 30 DAY)";
        $data9 = $num9->query($quary9);

        $num10 = new Admin_Home();
        // $quary10 = "SELECT SUM(total)
        //             FROM (
        //             SELECT SUM(rbc.amount) + COUNT(defect.defect_id) AS total
        //             FROM rbc
        //             JOIN defect ON rbc.donor_id = defect.donor_id
        //             GROUP BY rbc.donor_id
        //             ) AS combined_result";
        $quary10 = "SELECT COUNT(*) AS DON FROM donor";
        // $quary10 = "SELECT COUNT(*) AS DON FROM donor WHERE date >= DATE_SUB(NOW(), INTERVAL 30 DAY";
        $data10 = $num10->query($quary10);
        // $total_sum = implode('', $data10[0]);
        // echo $total_sum;

        $num11 = new Admin_Home();
        $quary11 = "SELECT COUNT(*) AS BDC FROM blood_donation_camp";
        $data11 = $num11->query($quary11);





        $this->view('adminreport1', [
            'rows4' => $data4,
            'rows5' => $data5,
            'rows6' => $data6,
            'rows7' => $data7,
            'rows3' => $data3,
            'rows9' => $data9,
            'rows10' => $data10,
            'rows11' => $data11
        ]);
    }
}
