<?php
$link = 'mysql:host=localhost;dbmane=siglo';
$usuario = 'root';
$pass = '';

try {
    $pdo = new PDO($link,$usuario,$pass);
    echo 'conectado';

} catch (pdoexception $e){
    print "¡error:". $e->getmessage()."<br/>";
    die();
}
