<?php
//Development
define('HOST', '127.0.0.1');
define('USUARIO', 'teacherleo');
define('SENHA', '@devLEO2022.');
define('DB', 'site');

//Production
// define('HOST', '108.179.253.215');
// define('USUARIO', 'ingl3510_leo');
// define('SENHA', '1234567890leo');
// define('DB', 'ingl3510_portal');

$conn = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não conectado'); 