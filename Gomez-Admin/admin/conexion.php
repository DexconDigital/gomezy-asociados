<?php

function Conect()
{
    $echo = mysqli_connect("localhost","dexcondigital","dexcondigital@","dexcondigital_admin");
    return $echo;
}

?>