<?php
ini_set("display_errors", "1");
session_save_path('./session_save');
session_start();
echo $_SESSION['title'];
echo file_get_contents('./session_save/sess_'.session_id());
?>