<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>总分处理</title>
</head>

<body>
<?php


class scoreControl{
	
	function showscorecontrol($qnoAnsArray){
		$total = 0;
		foreach($qnoAnsArray as $page=>$keys){
			$total += $keys[3];
		}
		require './view/scoreView.php';
		$view = new ScoreView();
     	$view->displayScore($total, $qnoAnsArray);
	}
	
}
?>


</body>
</html>