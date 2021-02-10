<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>专题学习视图</title>
</head>

<body>
<?php
class SingleView {
	public function displaySingle($rows, $page) {
		
		$nextpage=$page+1;
		if($page==10){
			$nextpage=10;       //特殊的是最后页是总数页时下一页就是总数页
    	}
		foreach ($rows as $row) {
			$qno = $row["qno"];
			$ques = $row["ques"];
			$A = $row["ansa"];
			$B = $row["ansb"];
			$C = $row["ansc"];
			$D = $row["ansd"];
			$ans = $row["ans"];
		}
?>
<script language="javascript">
function r_submit()
{
	document.singleform.submit();
}
</script>
<div class="tiku">
    <form name="singleform" action="singleCheck.php" method="post">
        <p><?php echo $ques;?></p>
        <input type="radio" name="xuanxiang" value="<?php echo $A;?>" onclick="r_submit();">A：<?php echo $A;?><br>
        <input type="radio" name="xuanxiang" value="<?php echo $B;?>" onclick="r_submit();">B：<?php echo $B;?><br>
        <input type="radio" name="xuanxiang" value="<?php echo $C;?>" onclick="r_submit();">C：<?php echo $C;?><br>
        <input type="radio" name="xuanxiang" value="<?php echo $D;?>" onclick="r_submit();">D：<?php echo $D;?><br><br>
        <input type="hidden" name="qno" value="<?php echo $qno;?>">
        <input type="hidden" name="page" value="<?php echo $page;?>">
    </form>
</div>


<?php	
		/*echo "<div id='tiku'>";
			echo "<ul>";
				if($page<10) {
					echo "<li><a href='single.php?page=$nextpage'>下一题</a></li>";
				} else {
					echo "<li><a href='score.php'>提交</a></li>";
				}
			echo "</ul>";*/
		echo "<div>";
		echo "<br/>";
		echo "<p class='fenye_tips'>共10道题，当前是第".$page."题，点击选项直接跳转下题哦</p>";
		echo "<br/><br/>";
		echo "</div>";
	}

}
?>
</div>
</body>
</html>