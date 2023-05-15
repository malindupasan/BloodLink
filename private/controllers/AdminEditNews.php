
<?php



class AdminEditNews extends Controller
{
    function index($id = '')
    {
        $news = new Admin_EditNews();
        $id = $_GET['id'];
        
        if (count($_POST)>0)  {

            // $title = $_POST['title'];
            $description = $_POST['description'];
            $link = $_POST['link'];
            $image=new Image();

            $filename = $image->pic_validate();
                
                // $img="image file";
                $img = $filename;
                print($filename);
           
            // Update query
            $arr=array();
            $arr['id']=$id;
            $arr['img']=$img;
            $arr['description']=$description;
            $arr['link']=$link;
            $query = "UPDATE news SET  news_img=:img, description=:description, link=:link WHERE news_id=:id";
            $news->query($query,$arr);

            
            $this->redirect('adminnews');

        } else {

            // If form is not submitted, fetch data from database
            $query = "SELECT * FROM news WHERE news_id='$id'";
            $data = $news->query($query);



            $this->view('admineditnews', ['rows' => $data]);
        }
    }
}

 




