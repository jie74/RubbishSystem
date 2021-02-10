

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Construction</title>
    <link href="static/css/construction.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        <!--
        .style1 {color: #FFFFFF}
        -->
    </style>
    <script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>




</head>

<body>

<div id="container">

<!--    <div class="navigation">-->
<!--        <ul>-->
<!--            <li><a href="home.php">首页</a></li>-->
<!--            <li><a href="knowledge.php">知识课堂</a></li>-->
<!--            <li><a href="single.php?page=1">趣味问答</a></li>-->
<!--            <li><a href="#">预约</a></li>-->
<!--        </ul>-->
<!--    </div>-->
    <?php
    require_once ('header.php');
    ?>
    <div class="searcbar">
        <label></label>
        <form action="" method="get">
            <input name="text" type="text" class="text" id="password" />

            <label>
                <input type="submit" name="Search" id="Search" value="Search" />
            </label>

        </form>
    </div>
    <div class="topbar">

        <div style="width:760px; ">
            <div  style="height:140px; border-style: solid; border-width: 1px; padding: 5px; border-color: #CCCCCC; background-color: #FFFFFF;">
                <?php
                require_once ('search_rubbish.php');
                ?>

            </div >
        </div>
    </div>

    <div id="contentarea">
        <div class="rightcolumn">

            <div class="column1">
                <div class="titlebar">
                    <h1>大厅</h1>
                </div>
                <div class="content-inner" >
                    <div class="leftbar1">
                        <span class="boxtitle">可回收物</span><br />
                        可回收物主要是包含废旧纸张、塑胶、玻璃、金属和布料五大类，主要是适合回收再利用和资源化再生使用的生活废弃物.<br class="clearboth" />
                    </div>
                    <div class="leftbar2">
                        <span class="boxtitle">有害垃圾</span><br />
                        有害垃圾是指对身体健康或是自然环境导致可以直接或是潜在危害的废弃物，主要是包含废电池：充电电池，纽扣电池等，废漆料，消毒液，荧光灯，含汞体温计。这类垃圾需要特殊处理。<br class="clearboth" />
                    </div>
                    <div class="leftbar1">
                        <span class="boxtitle">厨余垃圾</span><br />
                        厨余垃圾（上海称湿垃圾）是指日常生活垃圾产生的容易腐烂的生活废弃物，主要是包含食材废材，剩菜剩饭，过期食品，瓜皮果核，花卉绿植等。经生物技术就地处理堆肥，每吨可生产0.6~0.7吨有机肥料。 <br class="clearboth" />
                    </div>
                    <div class="leftbar2">
                        <span class="boxtitle">其他垃圾</span><br />
                        其他垃圾的范围比较广，其他垃圾（上海称干垃圾）包括除上述几类垃圾之外的砖瓦陶瓷、渣土、卫生间废纸、纸巾等难以回收的废弃物及尘土、食品袋（盒）。采取卫生填埋可有效减少对地下水、地表水、土壤及空气的污染。<br class="clearboth" />
                    </div>
                </div>
                <div class="content-inner" style="display: none;">
                    <?php
//                     require_once ('show_RecycleRub.php');

//                    include ('config.inc.php');
                    include ('static/config.inc.php');
//                    require_once ('static/connect.php');
                    //                    $sort = '可回收垃圾';
                    $sql = "SELECT * FROM rubbish,category where rubbish.cno = category.cno and cname = '可回收物'";
                    $rowsult = $conn->query($sql);

                    $i = 1;
                    if ($rowsult->num_rows > 0) {

                        while ($row = $rowsult->fetch_assoc()) {

                            if($i % 2 != 0){

                                echo  "<div class=\"leftbar1\">";
                                echo "<p>",$row['rname'],"是可回收物，",$row['rintro'],"</p>";
                                echo "</div>";
                            }
                            else{
                                echo  "<div class=\"leftbar2\">";
                                echo "<p>",$row['rname'],"是可回收物，",$row['rintro'],"</p>";
                                echo "</div>";
                            }
                            $i = $i+1;

                        }
//                            echo "\n</TABLE>";
                    } else {
                        echo "0 结果";
                    }
                    // 释放结果集
                    mysqli_free_result($rowsult);

                    $conn->close();
                    ?>
                </div>
                <div class="content-inner" style="display: none;">
                    <?php
                    include ('static/config.inc.php');
                    //                    $sort = '可回收垃圾';
                    $sql = "SELECT * FROM rubbish,category where rubbish.cno = category.cno and cname = '餐厨垃圾'";
                    $rowsult = $conn->query($sql);

                    $i = 1;
                    if ($rowsult->num_rows > 0) {

                        while ($row = $rowsult->fetch_assoc()) {

                            if($i % 2 != 0){

                                echo  "<div class=\"leftbar1\">";
                                echo "<p>",$row['rname'],"是餐厨垃圾，",$row['rintro'],"</p>";
                                echo "</div>";
                            }
                            else{
                                echo  "<div class=\"leftbar2\">";
                                echo "<p>",$row['rname'],"是餐厨垃圾，",$row['rintro'],"</p>";
                                echo "</div>";
                            }
                            $i = $i+1;

                        }
//                            echo "\n</TABLE>";
                    } else {
                        echo "0 结果";
                    }
                    // 释放结果集
                    mysqli_free_result($rowsult);

                    $conn->close();
//                    require('showsort.php');
//                    $s = new sort();
//                    $s->showsorts1("有害垃圾");
//                    require_once ('show_KitchenRub.php');

                    ?>
                </div>
                <div class="content-inner" style="display: none;">
                    <?php
//                    require_once ('showsort.php');
//                    $s = new sort();
//                    $s->showsorts("厨余垃圾");
//                    require_once ('show_HarmfulRub.php')
                    include ('static/config.inc.php');
                    //                    $sort = '可回收垃圾';
                    $sql = "SELECT * FROM rubbish,category where rubbish.cno = category.cno and cname = '有害垃圾'";
                    $rowsult = $conn->query($sql);

                    $i = 1;
                    if ($rowsult->num_rows > 0) {

                        while ($row = $rowsult->fetch_assoc()) {

                            if($i % 2 != 0){

                                echo  "<div class=\"leftbar1\">";
                                echo "<p>",$row['rname'],"是有害垃圾，",$row['rintro'],"</p>";
                                echo "</div>";
                            }
                            else{
                                echo  "<div class=\"leftbar2\">";
                                echo "<p>",$row['rname'],"是有害垃圾，",$row['rintro'],"</p>";
                                echo "</div>";
                            }
                            $i = $i+1;

                        }
//                            echo "\n</TABLE>";
                    } else {
                        echo "0 结果";
                    }
                    // 释放结果集
                    mysqli_free_result($rowsult);

                    $conn->close();
                    ?>
                </div>
                <div class="content-inner" style="display: none;">
                    <?php
//                    require ('showsort.php');
//                    $s = new sort();
//                    $s->showsorts("其他垃圾");
//                    require_once ('show_OtherRub.php');
                    include ('static/config.inc.php');
                    //                    $sort = '可回收垃圾';
                    $sql = "SELECT * FROM rubbish,category where rubbish.cno = category.cno and cname = '其他垃圾'";
                    $rowsult = $conn->query($sql);

                    $i = 1;
                    if ($rowsult->num_rows > 0) {

                        while ($row = $rowsult->fetch_assoc()) {

                            if($i % 2 != 0){

                                echo  "<div class=\"leftbar1\">";
                                echo "<p>",$row['rname'],"是其他垃圾，",$row['rintro'],"</p>";
                                echo "</div>";
                            }
                            else{
                                echo  "<div class=\"leftbar2\">";
                                echo "<p>",$row['rname'],"是其他垃圾，",$row['rintro'],"</p>";
                                echo "</div>";
                            }
                            $i = $i+1;

                        }
//                            echo "\n</TABLE>";
                    } else {
                        echo "0 结果";
                    }
                    // 释放结果集
                    mysqli_free_result($rowsult);

                    $conn->close();
                    ?>
                </div>
            </div>
        </div>
        <div class="leftcolumn">
            <div class="column2">
                <div class="titlebar">
                    <h1>垃圾分类</h1>
                </div>

                <li class="leftbar1">
                    <br/>
                    <span class="boxtitle">可回收物</span><br/>
                    <br class="clearboth" />
                </li>
                <li class="leftbar2">
                    <br/>
                    <span class="boxtitle">餐厨垃圾</span><br/>
                    <br class="clearboth" />

                </li>
                <li class="leftbar1">
                    <br/>
                    <span class="boxtitle">有害垃圾</span><br/>
                    <br class="clearboth" />
                </li>
                <li class="leftbar2">
                    <br/>
                    <span class="boxtitle">其他垃圾</span><br/>
                    <br class="clearboth" />
                </li>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>

            </div>
            <script>
                $(function(){
                    //获取点击事件的对象
                    $(".column2 li").click(function(){
                        //获取要显示或隐藏的对象
                        var divShow = $(".column1").children('.content-inner');
                        //判断当前对象是否被选中，如果没选中的话进入if循环
                        if (!$(this).hasClass('selected')) {
                            //获取当前对象的索引
                            var index = $(this).index();
                            //当前对象添加选中样式并且其同胞移除选中样式；
                            $(this).addClass('selected').siblings('li').removeClass('selected');
                            //索引对应的div块显示
                            $(divShow[index]).show();
                            //索引对应的div块的同胞隐藏
                            $(divShow[index]).siblings('.content-inner').hide();
                        }
                    });
                });

            </script>

        </div>
    </div>
</div>

</div>
<br class="clearboth" />

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>



<div class="footer">
    <ul>
        <li>
            Help      </li>
        <li>Terms</li>
        <li>Privacy Policy</li>
        <li>Safety Tips</li>
        <li>Report Abuse</li>
        <li>Advertise</li>
        <li>Developers</li>
        <li>MySpace International</li>
        <li>lMySpace Latino </li>
    </ul>
    <p class="style1">©2003-2009 MySpace.com. All Rights Reserved. </p>
</div>
<!--</form>-->
</body>
</html>

