<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--<link href="../static/css/bar.css" rel="stylesheet" type="text/css" />-->
    <!--<link href="../static/css/construction.css" rel="stylesheet" type="text/css" />-->
<title>专题视图</title>
</head>

<body>
<?php
class TopicView {
	public function displayTopicRubbish($rows, $topic, $rowrubs) {
		
		echo "<div class=tname>";
		$i = 1;
		foreach ($rows as $row) {
			if($i % 2 != 0){
				echo  "<div class=\"tablerow1\">";
				echo "<p>";
				echo "<a href='topic.php?act={$row['tname']}'>{$row['tname']}</a>";
				echo "</p>";
				echo "</div>";
			}
			else{
				echo  "<div class=\"tablerow2\">";
				echo "<p>";
				echo "<a href='topic.php?act={$row['tname']}'>{$row['tname']}</a>";
				echo "</p>";
				echo "</div>";
			}
			$i = $i+1;
		}
		echo "</div>";			
		
		
		/*echo "<div class=tname><ul>";
		foreach ($rows as $row) {
			 echo "<li>";
			 echo "<a href='topic.php?act={$row['tname']}'>{$row['tname']}</a>";
			 echo "</li>";
		}
		echo "</ul></div>";*/



        echo "<div class=contain><div class=centertext><h3>{$topic}</h3>";
?>
        <table width="600" border="1">
         <tr>
             <th>垃圾名称</th>
             <th>所属分类</th>
             <th>简介</th>
         </tr>
<?php
		foreach ($rowrubs as $rowrub) {
			 echo "<tr>";
			 echo "<td>{$rowrub['rname']}</td>";
			 echo "<td>{$rowrub['cname']}</td>";
			 echo "<td>{$rowrub['rintro']}</td>";
			 echo "</tr>";
		}
		echo "</table></div></div>";
	}

}
?>

</body>
</html>