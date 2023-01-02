<?php
//Development
//define('HOST', '127.0.0.1');
//define('USUARIO', 'teacherleo');
//define('SENHA', '@devLEO2022.');
//define('DB', 'site');

//Production
define('HOST', '192.185.223.40');
define('USUARIO', 'ingl814_leo');
define('SENHA', 'eu<#MACEIO');
define('DB', 'ingl814_site');

$conn = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não conectado'); 