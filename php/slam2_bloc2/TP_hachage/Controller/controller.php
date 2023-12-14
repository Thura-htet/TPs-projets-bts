<?php
function hachage(string $password):void
{
    echo 'MD5 : ' . hash('md5', $password) . '</br>';
    $password = 'whateverneverminb';
    echo 'MD5 : ' . hash('md5', $password) . '</br>';
    echo 'SHA1 : ' . hash('sha1', $password) . '</br>';
    echo 'SHA256 : ' . hash('sha256', $password) . '</br>';
    echo 'SHA512 : ' . hash('sha512', $password) . '</br>';
}

function cryptage(string $password):void
{
    echo 'CRYPT_STD_DES : ' . crypt($password, 's1') . '</br>';
    echo 'CRYPT_EXT_DES : ' . crypt($password, '_user1778') . '</br>';
    echo 'CRYPT_SHA256 : ' . crypt($password, '$5$12345678901234AB') . '</br>';
}

function hash_crypt(string $password):void
{
    $selString = 'dlgqsljkdjg';
    $selHash = hash('md5', $selString);
    echo 'hash du sel : ' . $selHash . '</br>';
    $sel = '_' . substr($selHash, 7);
    $hash = crypt($password, $sel);
    echo ' hash du mot de passe : ' . $hash;
}

function hash_test(string $password):void
{
    echo password_hash($password, PASSWORD_BCRYPT) . '</br>';
    echo password_hash($password, PASSWORD_BCRYPT) . '</br>';
}