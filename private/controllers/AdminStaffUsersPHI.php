
<?php

class AdminStaffUsersPHI extends Controller
{

    function index($id = '')
    {

        $staff = new Admin_StaffUsers_PHI();
        $quarry = "SELECT * FROM phi ";
        $quarry = "SELECT phi.*, blood_bank.name AS blood_bank_name
                    FROM phi 
                    JOIN blood_bank ON phi.blood_bank_id = blood_bank.blood_bank_id;
                    ";
        $data = $staff->query($quarry);

        // $user = new Admin_StaffUsers_PHI();
        // if (count($_POST) > 0) {
        //     $user->insert($_POST);
        //     $this->redirect('adminstaffusersphi');
        //     $errors = array();
        // }


        $user = new Admin_StaffUsers_PHI();
        if (isset($_POST['editForm'])) {
            $id = $_POST['id'];
            unset($_POST['id']);
            unset($_POST['editForm']);
            $user->update1($id, $_POST);
            $this->redirect('adminstaffusersphi');
            return;
        } else if (count($_POST) > 0) {
            $user->insert($_POST);
            $this->redirect('adminstaffusersphi');
            return;
        }


        



        $this->view('adminstaffusersphi', [$data]);



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
                $usrs1 = new Admin_StaffUsers_PHI();

                // $stm = "SELECT * FROM phi where name like '$text%'";
                $stm = "SELECT phi.*, blood_bank.name AS blood_bank_name
                        FROM phi
                        JOIN blood_bank ON phi.blood_bank_id = blood_bank.blood_bank_id
                        WHERE phi.name LIKE '$text%';
                        ";


                $results = $usrs1->query($stm);

                echo json_encode($results);
                // $data = $user->query($query);
                // echo (json_encode($data));
            }
        }


}   