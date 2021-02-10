<?php
require_once ('DB.php');
class SRM{
    var $db;
    var $link;
    var $str = "33";
    function __construct()
    {
        require_once "./static/connect.php";

    }

    function getOneUser($text1)
    {

        $sql ="select * from rubbish t1 left join category t2 on t1.cno = t2.cno and rname like'%$text1%'";
//        $rows = $this->db->get_all();
        $re = mysqli_query($this->link,$sql);
//        $rows = mysqli_fetch_all($re);
        return $re;
    }

//    function __destruct()
//    {
//        // TODO: Implement __destruct() method.
//        $this->db = null;
//
//    }

}
?>
