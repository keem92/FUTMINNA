<?php
    $conn= mysqli_connect('localhost', 'root', '', 'futminna');
    if ('$conn'){
        echo '';
    }else{
        echo 'failed';
    }

?>