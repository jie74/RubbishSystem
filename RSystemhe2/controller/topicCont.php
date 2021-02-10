<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="static/css/bar.css" rel="stylesheet" type="text/css" />
    <link href="static/css/construction.css" rel="stylesheet" type="text/css" />
<title>知识什锦处理</title>
</head>

<body>
<?php


class topicControl{
	
	function showleftcontrol($topic){
		require './model/topicModel.php';
		require './view/topicView.php';
		$model=new Topic();
		$view = new TopicView();
		$rows=$model->getAllTopic();
		$rowsubs=$model->getTopicRubbish($topic);
     	$view->displayTopicRubbish($rows, $topic, $rowsubs);
	}
	
}
?>


</body>
</html>