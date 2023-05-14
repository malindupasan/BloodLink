<?php

class AdminStaffUsersLabStaff extends Controller
{

    function index($id = '')
    {

        $staff = new Admin_StaffUsers_LabStaff();
        // $quarry = "SELECT * FROM lab_staff";
        $quarry = "SELECT lab_staff.*, blood_bank.name AS blood_bank_name
                    FROM lab_staff 
                    JOIN blood_bank ON lab_staff.blood_bank_id = blood_bank.blood_bank_id;
                    ";
        $data = $staff->query($quarry);

        // $user = new Admin_StaffUsers_LabStaff();
        // if (count($_POST) > 0) {
        //     $user->insert($_POST);
        //     $this->redirect('adminstaffuserslabstaff');
        //     $errors = array();
        // }


        $user = new Admin_StaffUsers_LabStaff();
        if (isset($_POST['editForm'])) {
            $id = $_POST['id'];
            unset($_POST['id']);
            unset($_POST['editForm']);
            $user->update1($id, $_POST);
            $this->redirect('adminstaffuserslabstaff');
            return; 
        } else if (count($_POST) > 0) {
            $user->insert($_POST);
            $this->redirect('adminstaffuserslabstaff');
            return;
        }

        
            // print_r($user);


        $this->view('adminstaffuserslabstaff', [$data]);
    }

    function index2()
        {
            if (count($_POST) > 0) {

                $text = $_POST['text'];
                $text = addslashes($text);

                // $str="mysql:host=localhost;dbname=bloodlink";

                // try{
                //     $con= new PDO($str,"root","");

                // }catch(PDOException $e){
                //     die($e->getmessage());
                // }
                // $don=new BLDonor();
                $usrs1 = new Admin_StaffUsers_LabStaff();

                // $stm = "SELECT * FROM lab_staff where name like '$text%'";
                $stm = "SELECT lab_staff.*, blood_bank.name AS blood_bank_name
                        FROM lab_staff
                        JOIN blood_bank ON lab_staff.blood_bank_id = blood_bank.blood_bank_id
                        WHERE lab_staff.name LIKE '$text%';
                        ";


                $results = $usrs1->query($stm);

                echo json_encode($results);
                // $data = $user->query($query);
                // echo (json_encode($data));
            }
        }
}
