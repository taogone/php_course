<?php
if($_POST['id'] === 'taogone'){
    if($_POST['password'] === '1111'){
        echo 'right';
    } else {
        echo 'password wrong';
    }   
} else {
    echo 'id wrong';
}
?>