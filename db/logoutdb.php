<?php

//Criar classe
//Verificar se realmente conseguiu destruir a sessao para depois deslogar.
session_start();
session_destroy();

header("Location: " . $BASE_URL . "../index.php");
exit();