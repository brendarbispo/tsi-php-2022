<?php

//chama o controle de sessao
require_once '..controleDeSessao/controle.php';

//Destroi a sessao
session_destroy();

//redireciona
header('Location: /tsi-php-2202/login');
