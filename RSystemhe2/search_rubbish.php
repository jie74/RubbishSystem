<style>
.sent {
	font-size: 20px;
	font-family: 'LiSu';
}
</style>

<?php


if (isset($_GET['Search']))
{

require_once 'controller/searchRubcontroller.php';
$text1 = $_GET['text'];
$show = new searchcontrol();
$show->showsearchcontrol($text1);


}

else {
?>
    <br /><center><p class='sent'>
<?php
	echo "望得见山、看得见水、记得住乡愁</p></center>";
}


?>