<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<?php
class DB extends PDO  // 继承PDO数据库类
{
    var $sth;
 
    function execute($sql,$values = array())
    {
        $this->sth = $this->prepare($sql);
        return $this->sth->execute($values);
    }
 
    function get_all($sql,$values = array())
    {
        $this->execute($sql,$values);
        return $this->sth->fetchAll();
    }
 
    function get_one($sql,$values = array())
    {
        $this->execute($sql,$values);
        return $this->sth->fetch();
    }
 
    function get_col($sql,$values = array(),$column_number = 0)
    {
        $this->execute($sql,$values);
        return $this->sth->fetchColumn($column_number);
    }
 
    function insert($table,$data)
    {
        $fields = array_keys($data);
        $marks = array_fill(0,count($fields),'?');
        $sql = "insert into $table (`".implode('`,`',$fields)."`) values (".implode(",",$marks)." )";
        return $this->execute($sql,array_values($data));
 
    }
 
    function update($table,$data,$where)
    {
        $values = $bits = $wheres = array();
        foreach ($data as $k => $v)
        {
            $bits[] = "`$k` = ?";
            $values[] = $v;
        }
 
        if(is_array($where))
        {
            foreach ($where as $c => $v)
            {
                $wheres[] = "$c = ?";
                $values[] = $v;
            }
        }
        else
        {
            return false;
        }
 
        $sql = "update $table set ".implode(',',$bits).' where '.implode(' and ',$wheres);
        return $this->execute($sql,$values);
 
    }
 
    function dalete($table,$field,$where)
    {
        if(empty($where))
        {
            return false;
        }
 
        $this->sth = $this->prepare("delete from $table where $field = ?");
        if(is_array($where))
        {
            foreach ($where as $key => $val)
            {
                $this->sth->execute(array($val));
 
            }
        }
        else
        {
            $this->sth->execute(array($where));
        }
 
    }
 
    function table2sql($table)
    {
        $sql = array();
        $sql[] = "drop table if exists `{$table}`;\n";
        $create_table = $this->get_one('show create table'.$table);
        $sql[] = $create_table[1].";\n\n";
        return implode('',$sql);
    }
 
    function data2sql($table)
    {
        $sql = array();
        $sql[] = "drop table if exists `{$table}`;\n";
        $create_table = $this->get_one('show create table'.$table);
        $sql[] = $create_table[1].";\n\n";
        $rows = $this->get_all("select * from $table");
        $col_count = $this->sth->columnCount();
        foreach($rows as $row)
        {
            $sql[] = "insert into $table values(";
            $comma = '';
            for($i=0; $i<$col_count; $i++)
            {
                if(!isset($row[$i]))
                {
                    $sql[] = $comma." NULL";
                }
                else
                {
                    $sql[] = $comma."'".$row[$i]."''";
                }
                $comma = ',';
            }
            $sql[] = ");\n";
        }
        $sql[] = "\n";
        return implode('',$sql);
    }
 
    function dump_sql()
    {
        $sql = array();
        foreach ($this->query('show tables') as $row)
        {
            $sql[] = $this->data2sql($row[0]);
        }
        return implode('',$sql);
    }
}
?>
</body>
</html>