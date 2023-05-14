
<?php

class AdminStaffUsers extends Controller
{

    function index($id = '')
    {

        $staff = new Admin_StaffUsers();
        // $quarry = "SELECT * FROM doctor ";
        $quarry = "SELECT doctor.*, blood_bank.name AS blood_bank_name
                    FROM doctor 
                    JOIN blood_bank ON doctor.blood_bank_id = blood_bank.blood_bank_id;
                    ";
        $data = $staff->query($quarry);


        // $user = new Admin_StaffUsers();
        // if (count($_POST) > 0) {
        //     $user->insert($_POST);
        //     $this->redirect('adminstaffusers');
        //     $errors = array();
        // }

        $user = new Admin_StaffUsers();
        if (isset($_POST['editForm'])) {
            $id = $_POST['id'];
            unset($_POST['id']);
            unset($_POST['editForm']);
            $user->update1($id, $_POST);
            $this->redirect('adminstaffusers');
            return;
        } else if (count($_POST) > 0) {
            $user->insert($_POST);
            $this->redirect('adminstaffusers');
            $errors = array();

            return;
        }

        




        $this->view('adminstaffusers', ['rows' => $data]);
    }


    function index1()
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
            $usrs1 = new Admin_StaffUsers();

            // $stm = "SELECT * FROM doctor where name like '$text%'";
            $stm = "SELECT doctor.*, blood_bank.name AS blood_bank_name
                        FROM doctor
                        JOIN blood_bank ON doctor.blood_bank_id = blood_bank.blood_bank_id
                        WHERE doctor.name LIKE '$text%';
                        ";


            $results = $usrs1->query($stm);

            echo json_encode($results);
            // $data = $user->query($query);
            // echo (json_encode($data));
        }
    }
}
