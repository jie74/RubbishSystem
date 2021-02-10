<?php

class SRV{

    function displaySearchUser($rows,$text1){

        foreach ($rows as $row){
            if (!$row) {
                echo 0;
            } else {
                if ($text1 != "" && $row['cname'] != null)
                    echo $row['rname'], "属于", $row['cname'], '</br>';
            }
        }
    }
}
?>
