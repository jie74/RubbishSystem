<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>知识什锦视图</title>
</head>

<body>
<table width="600" border="1">
         <tr>
             <th>知识分类</th>
             <th>具体内容</th>
         </tr>
<?php 
foreach ($rows as $row) {
	 echo "<tr>";
	 echo "<td class=\"kclass\">{$row['kclass']}</td>";
	 echo "<td>{$row['content']}</td>";
	 echo "</tr>";
}
?>
</table>
</body>
</html>