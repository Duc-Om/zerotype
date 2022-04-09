<?php
    require('control.php');
    $getData = new Data();
    $delete = $getData->delete($_GET['delete']);
    if($delete){
        header('location:adminIndex.php');
    }else{
        echo 'Không xóa được';
    }
?>