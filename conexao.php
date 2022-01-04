<?php
define('HOST', '108.179.253.215');
define('USUARIO', 'ingl3510_leo');
define('SENHA', '1234567890leo');
define('DB', 'ingl3510_portal');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não conectado'); 