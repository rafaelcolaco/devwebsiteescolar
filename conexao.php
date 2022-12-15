<?php
define ('HOST', '127.0.0.1');
define ('USUARIO', 'root');
define ('SENHA', '');
define ('DB', 'login');
define ('DB_PORT','3306');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB, DB_PORT);