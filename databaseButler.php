<?php
    function def(){
        //The following PHP code needs to be re-executed as this is a different instance
        require_once('init.php');
        require_once('functions.php');
    }
    function test(){
        def();
        $tst = new Db();
        $result = $tst->fetchName();
        echo json_encode($result);
        //$assoc_result[0]['name'] = "yash";
        //echo json_encode($assoc_result);
    }
    if((isset($_REQUEST['reqType']))==1){
        if($_REQUEST['reqType']==0){
            test();
        }
    }
?>
