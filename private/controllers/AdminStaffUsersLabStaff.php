<?php

class AdminStaffUsersLabStaff extends Controller
{

    function index($id = '')
    {

        if(!Auth::logged_in()){
            $this->redirect('login');
        }
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



    public function updateAccStatus($id)
    {
        $user1 = new Admin_StaffUsers_LabStaff();
        // retrieve the selected value from the POST parameters
        if (isset($_POST['status'])) {
            $selected_option = $_POST['status'];

            $quarry1 = "UPDATE lab_staff SET status = '$selected_option' WHERE id = '$id'";

            // call the model method to update the database
            if ($user1->query($quarry1)) {
                $res = [
                    'statusCode' => 200,
                    'message' => "success"
                ];
            } else {
                $res = [
                    'statusCode' => 500,
                    'message' => "error"
                ];
            }
            echo json_encode($res);
        } else {
            echo json_encode(['statusCode' => 500, 'message' => 'error']);
        }
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
