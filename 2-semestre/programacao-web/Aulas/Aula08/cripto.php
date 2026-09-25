<?php

echo $senha = "teste";
echo "<br>";
echo sha1($senha);
echo "<br>";
echo password_hash($senha, PASSWORD_DEFAULT);