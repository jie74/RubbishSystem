<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>总分视图</title>
</head>
<style>
h1{
	color:red;
}
</style>
<body>
<?php
class ScoreView {
	public function displayScore($total, $qnoAnsArray) {
		//-----------算总分--------------
		
?>		
		<div class="mleft"><h2>垃圾分类考试题</h2>
        <h1><?php echo $total;?>分</h1>
        <table width="600" border="1">
         <tr>
             <th>问题</th>
             <th>你的答案</th>
             <th>正确答案</th>
         </tr>
<?php 
		foreach ($qnoAnsArray as $page=>$key) {
			 echo "<tr>";
			 echo "<td>{$key[0]}</td>";//ques
			 echo "<td>{$key[1]}</td>";//xuanxiang
			 echo "<td>{$key[2]}</td>";//anscontent
			 echo "</tr>";
			 
		}
		echo "</table></div>";
	}

}
?>

</body>
</html>