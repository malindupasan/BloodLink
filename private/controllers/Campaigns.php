<?php
class Campaigns extends Controller
{
    function index($id = '')
    {


        if(!Auth::logged_in()){
            $this->redirect('login');
        }

      

        $camp = new Camp();
        $query = "select * from campaign where cName like :cName"; 
        $data = $camp->findAll();
        
        if(isset($_GET['find'])){
            $find=$_GET['find'].'%';
           
            $query = "select * from campaign where cName like :cName "; 
            
            $arr = ['cName' => $find];
            $data = $camp->query($query,$arr);

        }
        // $id=Auth::getid();    
        
        // $data = $camp->query($query,['cName'=>'dcs%']);
       
        
        $this->view('campaigns', [$data]);
       
        
    }
}