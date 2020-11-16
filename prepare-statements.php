<?php

/**
 * Para trabalhar com mais segurança com banco de dados,
 * podemos utilizar prepare e statements:
 * 
 * $stmt = $conn->prepare('select id from users where id = ?');
 * $stmt->bind_param('i', $id);
 * 
 * $stmt->execute();
 * 
 * $result = $stmt->get_result();
 * 
 * $users = $result->fetch_all(MYSQLI_ASSOC);
 * 
 * Agora podemos fazer um foreach em $users que tudo ocorrerá bem.
 * 
 * Utilizando esses dois recursos, prepare e passando os parametros através do bind_param
 * reza a lenda que não sofreremos com ataques de sql inject.
 */