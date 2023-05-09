
<?php



class AdminEditNews extends Controller
{
    function index($id = '')
    {
        $news = new Admin_EditNews();
        $id = $_GET['id'];
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $title = $_POST['title'];
            $description = $_POST['description'];
            $link = $_POST['link'];
            
            // Update query
            $query = "UPDATE news SET title='$title', description='$description', link='$link' WHERE news_id='$id'";
            $news->query($query);

            
            $this->redirect('adminnews');

        } else {

            // If form is not submitted, fetch data from database
            $query = "SELECT * FROM news WHERE news_id='$id'";
            $data = $news->query($query);



            $this->view('admineditnews', ['rows' => $data]);
        }
    }
}

 




