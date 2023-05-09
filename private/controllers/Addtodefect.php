<?php
class Addtodefect extends Controller
{
    function index($id = '')
    {   
        $id=$_GET['id'];

        $bp=new Rawblood();
        $data=$bp->where("packet_id",$id);

        $data=$data[0];
        // print_r($data);

        $did=$data->donor_id;

        $don=new BLDonor();

        $dondata=$don->where("id",$did);
        $dondata=$dondata[0];
        // print_r($dondata);
        // echo $did;
        if(count($_POST)>0){

            $def=new BLDefect();
            
            $arr['doctor_id'] = $_POST['docid'];
            $arr['donor_id'] = $_POST['donid'];
            $arr['date'] = $_POST['date'];
            $arr['type']= $_POST['type'];
            $arr['reason'] = $_POST['reason'];

            $arr2['is_defect']=1;

            $arr3['status']=3;

            $bp->update($id,$arr3);
            $don->update($did,$arr2);

            $def->insert($arr);

            $this->redirect('viewdonationsrejected');


        }

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        // $user = $this->load_model('User');

            // $arr['fullname'] = "harini silva";
            // $arr['email'] = "hello@gmail.com";
            // $arr['nic'] = "200016206040";
            // $arr['mobile'] = "0703802708";
            // $arr['city'] = "auckland";
            // $arr['address'] = "1/90 mahiyangana road badulla";
            // $arr['password'] = "$2y$10$.3UNYspSG3a59vZNJpqFPORLv8QUbmRKNOSkp3YDiYkhS.NdsiQ96";
            // $arr['profile_img'] = "";


        // $user->insert($arr);
        // $user->delete(25);
        // $data = $user->findAll();

        // $data=$user->where('id', 1);
        $this->view('addtodefect',['rows'=>$data,'rows2'=>$dondata]);//, ['rows' => $data]);
        // $this->view('home');
    }
}