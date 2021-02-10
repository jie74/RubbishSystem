<?php 
	error_reporting(0);
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>判断题处理</title>
</head>
<style type="text/css">
body {
	background-image: url('static/images/bg2.jpg');
	background-repeat: no-repeat;
	background-size:cover;
	font-family: Trebuchet MS;
	font-size: 12px;
	background-attachment: scroll;
}
</style>
<body>
<?php
require 'model/singleModel.php';
$modelcheck=new Single();

$xuanxiang = $_POST["xuanxiang"];
$qno = $_POST["qno"];
$page = $_POST["page"];
$nextpage = $page+1;
if($page==10){
	$nextpage=10;       //特殊的是最后页是总数页时下一页就是总数页
}

$rows=$modelcheck->getAllByQno($qno);
$ans = $rows['ans'];//输出为ABCD其一
//$anscontent为正确答案对应的选项内容
switch($ans){
	case A: $anscontent=$rows['ansa'];break;
	case B: $anscontent=$rows['ansb'];break;
	case C: $anscontent=$rows['ansc'];break;
	case D: $anscontent=$rows['ansd'];break;
}
$ques = $rows['ques'];


if($xuanxiang == $anscontent){
	$iscorrect = 10;
}else{
	$iscorrect = 0;
}
	
$_SESSION['qnoAnsArray']["{$page}"]=array($ques, $xuanxiang, $anscontent, $iscorrect);
	
if($page == 10){
	echo "<script>location.href='score.php';</script>";
}else{
	echo "<script>location.href='judge.php?page=$nextpage';</script>";
}

?>
<form name="qnoAnsForm" action="score.php" method="post">
<input type="hidden" name="qno" value="<?php echo $qno;?>">
<input type="hidden" name="xuanxiang" value="<?php echo $xuanxiang;?>">
</form>

</body>
</html>