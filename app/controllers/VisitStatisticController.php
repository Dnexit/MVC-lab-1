<?php


namespace app\controllers;

use app\core\BaseActiveRecord;
use app\core\Controller;
use app\models\VisitStatisticModel;

class VisitStatisticController extends Controller
{
    public function indexAction(){
        AdminPanelController::authenticate();

        if( VisitStatisticModel::find($_SERVER['HTTP_USER_AGENT'], "browser_name") == null ){
            $this->save();
        }

        $allVisits = VisitStatisticModel::all("date", "ASC");

        $this->view->render("Статистика посещений", [
            "allVisits" => $allVisits
        ]);
    }

    function save(){
        $visitStatistic = new VisitStatisticModel();

        $visitStatistic->date = date('Y-m-d H:i:s');
        $visitStatistic->host_name = gethostbyaddr($_SERVER['REMOTE_ADDR']);
        $visitStatistic->ip_address = $_SERVER['REMOTE_ADDR'];
        $visitStatistic->browser_name = $_SERVER['HTTP_USER_AGENT'];

        $visitStatistic->save();
    }
}