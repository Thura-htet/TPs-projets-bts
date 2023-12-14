<?php

require('menuprincipal.php');
require('Controller/ctpilote.php');

if (isset($_GET['action']))
{
    if ($_GET['action'] == 'AfficherMonTP')
    {
        MonTPClassPilote();
    }
}