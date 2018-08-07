<?php
$db = mysqli_connect('localhost','root','','darbuotojai_db');
$db->set_charset('utf8');

$query = "INSERT INTO darbuotojai(name,surname) VALUES ('Griaustinis','Griaustinaitis') ";

mysqli_query($db,$query) or die(mysqli_error($db));

