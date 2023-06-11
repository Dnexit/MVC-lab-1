<?php


namespace app\controllers;

use app\core\Controller;
use app\models\BlogModel;

class BlogController extends Controller
{
    const PAGES = 4;

    public function indexAction(){
        $blogRecords = BlogModel::paginate(self::PAGES);
        $blogNumPage = ceil(BlogModel::getNumRow() / self::PAGES);

        $this->view->render("Мой блог", [
            "blogRecords" => $blogRecords,
            "blogNumPage" => $blogNumPage
        ]);
    }

    public function editAction(){
        //AdminPanelController::authenticate();

        $blogRecords = BlogModel::paginate(self::PAGES);
        $blogNumPage = ceil(BlogModel::getNumRow() / self::PAGES);

        if( !empty( $_POST ) ){
            $_POST['img'] = $_FILES['img']['name'];
            $errors = $this->model->Validate($_POST);

            if( count( $errors ) == 0 ){
                $uploaddir = 'public/img/blog/';
                $uploadfile = $uploaddir . basename($_FILES['img']['name']);
                if(!move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile))
                {

                }
                $this->save();
            }
        }


        $this->view->render("Редактирование блога", [
            "blogRecords" => $blogRecords,
            "blogNumPage" => $blogNumPage
        ]);
    }

    public function loadAction(){
        //AdminPanelController::authenticate();

        if ( !empty($_FILES) ) {
            $filename = "public/" . $_FILES["file"]["name"];

            if( file_exists( $filename ) && !is_dir( $filename ) ){
                $messages = BlogModel::getCSVData($filename);
                $this->saveCSV($messages);
            } else $errors[] = "Файл не существует";
        }

        $this->view->render("Загрузка сообщений блога", [
            "messages" => BlogModel::all("created_at", "ASC")
        ]);
    }

    public function phpAction()
    {
        phpinfo();
    }

    function saveCSV($messages){
        foreach ($messages as $message){
            $blog = new BlogModel();

            $blog->title = $message[0];
            $blog->text = $message[1];
            $blog->img = $message[2];
            $blog->created_at = $message[3];

            $blog->save();
        }
    }

    function save(){
        $blog = new BlogModel();

        $blog->created_at = date('Y-m-d H:i:s');
        $blog->title = $_POST["title"];
        $blog->img = $_POST["img"];
        $blog->text = $_POST["text"];

        $blog->save();
    }
}