<?php

class AdminBloodStocks extends Controller
{

    function index($id = '')
    {
        $num = new Admin_Home();
        $quary = "SELECT COUNT(*) AS DON FROM donor";
        $data = $num->query($quary);


        $num1 = new Admin_Home();
        $quary1 = "SELECT COUNT(*) AS DONA FROM rbc";
        $data1 = $num1->query($quary1);
        // CURDATE()

        $num2 = new Admin_Home();
        $quary2 = "SELECT COUNT(*) AS CAMP FROM blood_donation_camp";
        $data2 = $num2->query($quary2);


        $num3 = new Admin_Home();
        // $quary3 = "SELECT b.name, b.blood_bank_id, p.plasma_count, pl.platelets_count, r.rbc_count, w.wbc_count
        //             FROM blood_bank b
        //                 INNER JOIN (
        //                 SELECT blood_bank_id, COALESCE(SUM(p.amount), 0) as plasma_count
        //                 FROM plasma p
        //                 GROUP BY blood_bank_id
        //             ) p ON b.blood_bank_id = p.blood_bank_id
        //                 INNER JOIN (
        //                 SELECT blood_bank_id, COALESCE(SUM(pl.amount), 0) as platelets_count
        //                 FROM platelets pl
        //                 GROUP BY blood_bank_id
        //             ) pl ON b.blood_bank_id = pl.blood_bank_id
        //                 INNER JOIN (
        //                 SELECT blood_bank_id, COALESCE(SUM(r.amount), 0) as rbc_count
        //                 FROM rbc r
        //                 GROUP BY blood_bank_id
        //             ) r ON b.blood_bank_id = r.blood_bank_id
        //                 INNER JOIN (
        //                 SELECT blood_bank_id, COALESCE(SUM(w.amount), 0) as wbc_count
        //                 FROM wbc w
        //                 GROUP BY blood_bank_id
        //             ) w ON b.blood_bank_id = w.blood_bank_id";

        $quary3 = "SELECT 
                        b.name, 
                        b.blood_bank_id, 
                        COALESCE(p.plasma_count, 0) as plasma_count,
                        COALESCE(pl.platelets_count, 0) as platelets_count,
                        COALESCE(r.rbc_count, 0) as rbc_count,
                        COALESCE(w.wbc_count, 0) as wbc_count
                    FROM blood_bank b
                    LEFT JOIN (
                        SELECT blood_bank_id, SUM(amount) as plasma_count
                        FROM plasma
                        GROUP BY blood_bank_id
                    ) p ON b.blood_bank_id = p.blood_bank_id
                    LEFT JOIN (
                        SELECT blood_bank_id, SUM(amount) as platelets_count
                        FROM platelets
                        GROUP BY blood_bank_id
                    ) pl ON b.blood_bank_id = pl.blood_bank_id
                    LEFT JOIN (
                        SELECT blood_bank_id, SUM(amount) as rbc_count
                        FROM rbc
                        GROUP BY blood_bank_id
                    ) r ON b.blood_bank_id = r.blood_bank_id
                    LEFT JOIN (
                        SELECT blood_bank_id, SUM(amount) as wbc_count
                        FROM wbc
                        GROUP BY blood_bank_id
                    ) w ON b.blood_bank_id = w.blood_bank_id";
        $data3 = $num3->query($quary3);
        // print_r($data3);

        // $quary3 = "SELECT b.name, b.blood_bank_id, p.plasma_count, pl.platelets_count, r.rbc_count, w.wbc_count
        //            From blood_bank b
        //            INNER JOIN plasma p
        //            ON b.blood_bank_id = p.blood_bank_id


        //            ";
        // $data3 = $num3->query($quary3);

        $rbc = new Rbc(); //model instantiated
        $q1 = "SELECT IFNULL(SUM(amount), 0) AS sum,blood_group FROM rbc where exp_date>CURDATE() GROUP BY blood_group";
        $dat4 = $rbc->query($q1);
        // echo "<pre>";
        // print_r($dat4);

        $wbc = new Wbc(); //model instantiated
        $q2 = "SELECT IFNULL(SUM(amount), 0) AS sum,blood_group FROM wbc GROUP BY blood_group";
        $dat5 = $wbc->query($q2);
        // print_r($dat5);


        $plsm = new Plasma(); //model instantiated
        $q3 = "SELECT IFNULL(SUM(amount), 0) AS sum,blood_group FROM plasma where exp_date>CURDATE() GROUP BY blood_group";
        $dat6 = $plsm->query($q3);
        // print_r($dat6);

        $plt = new Platelettes(); //model instantiated
        $q4 = "SELECT IFNULL(SUM(amount), 0) AS sum,blood_group FROM platelets where exp_date>CURDATE() GROUP BY blood_group";
        $dat7 = $plt->query($q4);
        // print_r($dat7);



        if ($_SERVER['REQUEST_METHOD'] === 'POST') { //-----------------ajax start

            $response = array("rbc" => $dat4, "wbc" => $dat5, "plt" => $dat6, "plsm" => $dat7);

            echo json_encode($response);
        } else {
            $this->view('adminbloodstocks', ['rows' => $data, 'rows1' => $data1, 'rows2' => $data2, 'rows3' => $data3]); //------------------ajax end

        }
    }
}
