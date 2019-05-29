<?php
session_save_path('./session_save');
session_start();
$_SESSION['title'] = '생활코딩';
?>