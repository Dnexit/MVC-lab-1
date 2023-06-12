<?php


namespace app\controllers;

use app\core\Controller;
use app\core\View;
use app\models\BlogModel;
use app\models\CommentsModel;

class BlogController extends Controller
{
    const PAGES = 4;

    public function indexAction(){
        if (!isset($_GET["id"])) {
            $blogRecords = BlogModel::paginate(self::PAGES);
            $blogNumPage = ceil(BlogModel::getNumRow() / self::PAGES);

            $this->view->render("Мой блог", [
                "menuIndex" => 10,
                "blogRecords" => $blogRecords,
                "blogNumPage" => $blogNumPage
            ]);
        } else {
            $this->showBlogContentPage($_GET["id"]);
        }
    }

    public function addCommentAction(){
        $comment = new CommentsModel();

        $comment->comment_text = $_POST["text"];
        $comment->blog_id = (int)$_POST["id"];
        $last_comment_num = (int)$_POST['last_comment_num'];

        try {
            $comment->save();
            $blogRecords = BlogModel::paginate(self::PAGES);
            $blogNumPage = ceil(BlogModel::getNumRow() / self::PAGES);
            $this->view->render("Мой блог", [
                "menuIndex" => 10,
                "blogRecords" => $blogRecords,
                "blogNumPage" => $blogNumPage
            ], "blog/index");
        } catch (\Exception $e) {
            echo json_encode([
                "icon" => "error",
                "title" => "При добавлении произошла ошибка"
            ]);
        }
    }

    public function showBlogContentPage($id)
    {
        $blogData = BlogModel::find($id);
        $comments = CommentsModel::findAll($id, "blog_id");
        $blogRecords = BlogModel::paginate(self::PAGES);
        $blogNumPage = ceil(BlogModel::getNumRow() / self::PAGES);

        $this->view->render("Мой блог", [
            "menuIndex" => 10,
            "blogData" => $blogData,
            "comments" => $comments,
            "blogRecords" => $blogRecords,
            "blogNumPage" => $blogNumPage
        ], "blog/blogContent");
    }

    public function editAction(){
        AdminPanelController::authenticate();

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

    public function editRecordAction()
    {
        AdminPanelController::authenticate();
        if (empty($_POST)) View::errorCode(404);

        $blog = BlogModel::find($_POST["blog_id"]);

        $blog->title = $_POST["title"];
        $blog->text = $_POST["text"];

        try {
            $blog->update();
            $blogRecords = BlogModel::paginate(self::PAGES);
            $blogNumPage = ceil(BlogModel::getNumRow() / self::PAGES);
            $this->view->render("Мой блог", [
                "menuIndex" => 10,
                "blogRecords" => $blogRecords,
                "blogNumPage" => $blogNumPage
            ], "blog/index");
        } catch (\Exception $e) {
            echo json_encode([
                "icon" => "error",
                "title" => "При изменении произошла ошибка"
            ]);
        }
    }

    public function loadAction(){
        AdminPanelController::authenticate();

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