<?php
class Campaigns extends Controller
{
    function index($id = '')
    {


        if (!Auth::logged_in()) {
            $this->redirect('login');
        }



        $camp = new Camp();
        $query = "select * from campaign where date >= :date";
        // $data = $camp->findAll();
        $date = date("Y-m-d");
        $arr = ['date' => $date];
        if (isset($_GET['find'])) {
            $find = $_GET['find'] . '%';
            $query = "select * from campaign where (date >= :date) && (cName like :cName) ";
            
            $arr = ['cName' => $find];

        }
        if (isset($_GET['prog'])) {
            
            $query = "select * from campaign where date = :date ";

        }

        if (isset($_GET['mycamps'])) {

            $NIC = 20001551; //AUTH::getNIC();
            $query = "select * from campaign where  NIC = :NIC ";
            $arr = ['NIC' => $NIC];

        }


        $data = $camp->query($query, $arr);
        $this->view('campaigns', [$data]);


    }
}