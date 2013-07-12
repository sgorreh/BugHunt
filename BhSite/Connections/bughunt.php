<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_bughunt = "mysql.sgorreh.ogbuta.com";
$database_bughunt = "bughunt";
$username_bughunt = "sgorreh";
$password_bughunt = "021289westfield";
$bughunt = mysql_pconnect($hostname_bughunt, $username_bughunt, $password_bughunt) or trigger_error(mysql_error(),E_USER_ERROR); 
?>