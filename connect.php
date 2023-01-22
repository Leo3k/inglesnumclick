<?php
//Development
define('HOST', '127.0.0.1');
define('USUARIO', 'teacherleo');
define('SENHA', '@devLEO2022.');
define('DB', 'site');

$conn = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não conectado'); 