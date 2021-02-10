<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>单选题处理</title>
</head>

<body>
<?php


class singleControl{
	
	function showsinglecontrol($page){
		require './model/singleModel.php';
		require './view/singleView.php';
		$model=new Single();
		$view = new SingleView();
		
		$rows=$model->getOneSingle();
     	$view->displaySingle($rows, $page);
		
	}
	
}
?>


</body>
</html>