<?php

require('menuprincipal.php');
require('Controller/controller.php');

if (isset($_GET['action']))
{
    if ($_GET['action'] == 'Hachage')
    {
        hachage('whatevernevermind');
    }
    elseif ($_GET['action'] == 'Crypt')
    {
        cryptage('btssioslam2');
    }
    elseif ($_GET['action'] == 'HashCrypt')
    {
        hash_crypt('btssioslam2');
    }
    elseif ($_GET['action'] == 'HashTest')
    {
        hash_test('btssioslam2');
    }
}