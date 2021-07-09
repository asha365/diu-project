<?php
    require_once("db.php");
    require_once("component.php");
    $con = Createdb();

    //click create button
    if(isset($_POST['create'])){
        echo "Create Button Clicked";
    }else{
        echo "not click create button";
    }

?>