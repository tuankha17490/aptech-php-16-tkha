<?php
    session_start();
    $_SESSION['name']='kha';
    $_SESSION['project']='web';
    var_dump($_SESSION);

    session_unset();
    session_destroy();

?>