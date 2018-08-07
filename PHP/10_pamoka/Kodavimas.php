<?php
//MD5 Kodavimas,nebenaudojimas apsaugojimui

$time = time();
echo md5('admin') . "<br>";

echo md5('admin' . $time) . "<br>";

//HASH,siais laikais naudojamas apsaugojimui
// I sesijas,cookies ir t.t. niekados nera rasomi passwordai!!! Jie naudojami kaip kintamieji ir t.t.

echo password_hash('admin',PASSWORD_DEFAULT) . "<br>";

$bword = password_hash('admin',PASSWORD_BCRYPT) ;

var_dump(password_verify('admin',$bword));


