<?php
class Campaigns extends Controller
{
    function index($id = '')
    {


        if (!Auth::logged_in()) {
            $this->redirect('login');
        }



        $camp = new Camp();
        $query = "select * from blood_donation_camp where date >= :date";
        // $data = $camp->findAll();
        $date = date("Y-m-d");
        $arr = ['date' => $date];   

        if((isset($_GET['date'])&&strlen($_GET['date']))&&(isset($_GET['find'])&&strlen($_GET['find']))){
            $find = $_GET['find'] . '%';
            $query = "select * from blood_donation_camp where (cName like :cName) &&  date = :date";
            $arr['date'] = $_GET['date'];
            $arr['cName'] = $find;
        } else {



            if (isset($_GET['find']) && strlen($_GET['find'])) {
                $find = $_GET['find'] . '%';
                $query = "select * from blood_donation_camp where (cName like :cName) &&  date >= :date";
                $arr['cName'] = $find;



            }
            if (isset($_GET['date']) && strlen($_GET['date'])) {
                $query = "select * from blood_donation_camp where date = :date";
                $arr['date'] = $_GET['date'];
            }
        }


        if (isset($_GET['prog'])) {
            
            $query = "select * from blood_donation_camp where date = :date ";

        }

        if (isset($_GET['mycamps'])) {

            $id=AUTH::getid(); //AUTH::getNIC();
            $query = "select * from blood_donation_camp where  donor_id = :id ";
            $arr = ['id' => $id];

        }
        // $query = "select * from campaign where (cName like 'd%') &&  date >= 2023-01-10";

        $data = $camp->query($query,$arr);
        $this->view('campaigns', [$data]);


    }
}