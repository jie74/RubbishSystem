文档4：开源软件维护设计方案中包含系统的 UML 类模型设计

项目名为RSystemhe2，直接放于服务器根目录下，如www/或htdocs/下。数据库名为rubbishsort。
sql文件中还未create database，可以先创建数据库rubbishsort，选择utf8_general_ci，再导入sql文件。
数据库配置信息在static目录下的connect.php和config.inc.php中。
若出现中文乱码或页面异常（看不到数据），尝试在以上两个文件中注释掉设置utf8的语句。

用户可以使用2892，密码123进行登录测试。
管理员使用909，密码123进行登录测试。

用户功能如下：
搜索垃圾所属分类
展示四大分类简介
点击分类查看垃圾
查看知识、专题学习
单选题、判断题
预约同区域人员上门回收
查看预约信息
查看修改个人信息
修改密码

管理员功能如下：
查看修改用户预约状态