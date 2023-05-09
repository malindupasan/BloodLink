
<?php

class AdminAddNews extends Controller
{
    function index($id = '')
    {

        // $news = new Admin_AddNews();
        // $quary = "SELECT * FROM news";
        // $data = $news->query($quary);

        $news1 = new Admin_AddNews();
        if (count($_POST) > 0) {
            $news1->insert($_POST);
            $this->redirect('adminnews');
            $errors = array();
        }


        $this->view('adminaddnews');


    }
}
