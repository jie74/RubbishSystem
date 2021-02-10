<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>单选题判断题模型</title>
</head>

<body>
<?php
//model(模型层)
require_once ('DB.php'); 
class Single
{
    var $db;
 
    function __construct()
    {
        require_once "./static/connect.php";
    }
 
    function getOneSingle()
    {
        $rows = $this->db->get_all("select * from question where qclass=1 ORDER BY RAND() LIMIT 1");
        return $rows;
    }
	
	function getOneJudge()
    {
        $rows = $this->db->get_all("select * from question where qclass=0 ORDER BY RAND() LIMIT 1");
        return $rows;
    }
	
	/*function getSingleAns($qno)//得出ABCD
    {
        $rows = $this->db->get_all("select * from question where qno=".$qno);
        return $rows;
    }
	
	function getAnsContent($qno, $ans)//得出正确答案对应的选项内容
    {
		$rows = $this->db->get_all("select * from question where qno=".$qno);
		switch($ans){
			case A: $anscontent=$rows['ansa'];
			case B: $anscontent=$rows['ansb'];
			case C: $anscontent=$rows['ansc'];
			case D: $anscontent=$rows['ansd'];
		}
        return $anscontent;
    }
	
	*/
	function getAllByQno($qno)
    {
		$rows = $this->db->get_one("select * from question where qno=".$qno);
        return $rows;
    }
}

?>
</body>
</html>
