<?php
    $name='kha';
    $project='web';
    setcookie($name,'',time() +60);
    setcookie($project,'',time ()+60);
    if (!isset($_COOKIE[$name]) && !isset($_COOKIE[$project]))
        {
            echo "MY NAME IS :".$name .'<br>';
            echo "MY PROJECT IS:".$project;
        }
    else {
        echo "setting's cookie wasn't successful ";
    }
?>