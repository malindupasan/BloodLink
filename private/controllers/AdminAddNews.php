
<?php

class AdminAddNews extends Controller
{
    function index($id = '')
    {

        // $news = new Admin_AddNews();
        // $quary = "SELECT * FROM news";
        // $data = $news->query($quary);
        $image = new Image();

        $news1 = new Admin_AddNews();
        if (count($_POST) > 0) {
            if ($filename = $image->pic_validate()) {
                $_POST['image'] = $filename;

            }
            $arr['image'] = $_POST['image']; 
            $news1->insert($_POST);
            $this->redirect('adminnews');
        }


        $this->view('adminnews');


    }
}
