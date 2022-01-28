<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'USUARIODOBANCO');
define('SENHA', 'SENHADOBANCO');
define('DB', 'NOMEDOBANCOCRIADO');

$conexao = mysql_connect(HOST, USUARIO, SENHA, DB); or die ('Não foi possivel conectar')