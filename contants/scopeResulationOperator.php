<?php
 class fixed{
    const SITE_NAME="W3 schools";

    function topic(){
        echo self::SITE_NAME;
    }
 }
 $obj=new fixed();
 $obj->topic();
?>
