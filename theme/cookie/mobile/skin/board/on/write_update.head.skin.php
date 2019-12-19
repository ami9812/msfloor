<?php
if(!defined("_GNUBOARD_")) exit("Access Denied");

if(!$is_admin){
    $_POST['wr_name'] = $wr_subject;
}

?>