
<?php

class AdminDashBoard extends Controller
{

    function index($id = '')
    {
        $num = new Admin_DashBoard();
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
        $quary3 = "SELECT COUNT(*) AS DEF FROM defect";
        $data3 = $num3->query($quary3);


        $num4 = new Admin_Home();
        $quary4 = "SELECT SUM(amount) AS RBC FROM rbc";
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


        $num8 = new Admin_Home();
        $quary8 = "SELECT * FROM blood_bank";
        $data8 = $num8->query($quary8);

        $num9 = new Admin_Home();
        $quary9 = "SELECT * FROM blood_donation_camp";
        $data9 = $num9->query($quary9);





        $this->view('admindashboard', ['rows' => $data, 
                                       'rows1' => $data1, 
                                       'rows2' => $data2, 
                                       'rows3' => $data3,
                                       'rows4' => $data4,
                                       'rows5' => $data5,
                                       'rows6' => $data6,
                                       'rows7' => $data7,
                                       'rows8' => $data8,
                                       'rows9' => $data9]);
    }
}
