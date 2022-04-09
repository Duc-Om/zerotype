<?php
    session_start();
    include('control.php');
    $getData = new Data();
    $select = $getData ->all();
    foreach($select as $select_Images){
        if ($_SESSION['username'] == $select_Images['username'] && $_SESSION['password'] == $select_Images['password']) {
            echo '<img src="'.$select_Images['avartar'].'">';
        }
    }

?>

<a href="logout.php" >Logout</a>
