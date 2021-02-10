<?php

class searchcontrol{

    function showsearchcontrol($text1){
//        require './model/sear';
//        require './view/judgeView.php';
        require_once './model/searchRubModel.php';
        require_once './view/searchRubView.php';
        $model = new SRM();
        $view = new SRV();

        $rows = $model->getOneUser($text1);
        $view->displaySearchUser($rows,$text1);
    }

}

?>
