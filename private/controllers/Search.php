<?php
class Search extends Controller
{
    public function index($id = '')
    {
        $donor = new User();
        $guest = new Guest_donor();
        if (isset($_POST['name'])) {
            $arr['name'] = $_POST['name'];
            $arr['nic'] = $_POST['nic'];
            $guest->insert($arr);
            $this->redirect('search');
        }
        if (isset($_GET['donor'])) {
            $data1 = $donor->where('nic', $_GET['donor']);
            $data2 = $guest->where('nic', $_GET['donor']);
            if ($data1) {
                $data = $data1[0];
            } else if ($data2) {
                $data = $data2[0];
            } else {
                $data = 0;
            }
           
            $this->view('search', ['data' => $data]);
        } else {
            $this->view('search');
        }

    }
}
